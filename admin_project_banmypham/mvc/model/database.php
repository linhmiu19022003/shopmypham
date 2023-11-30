<?php 
	//Tạo đối tượng database
	class database
	{	
		//Khởi tạo biến 
		protected $conn = null;
		protected $host = 'localhost:3306';
		protected $user = 'root';
		protected $pass = '';
		protected $name = 'banmypham';
		
		public function __construct()
		{
			//connect mysql
			$this->connect();
        }

        //Viết hàm kết nối với cơ sở dữ liệu
		public function connect()
		{
			$this->conn= new mysqli(
				$this->host,
				$this->user,
				$this->pass,
				$this->name
			);
			if (!$this->conn) {
				echo "Kết nối thất bại";
				exit();
			}
		}
		//Hàm lấy dữ liệu có hoặc không có điều kiện theo bảng
		public function get($table,$condition=array())
		{	
			//Bước 1 : Khởi tạo cấu trúc câu lệnh truy vấn
			$sql = "SELECT * from $table";
			//Bước 2: Kiểm tra xem có điều kiện không và cộng chuỗi tương ứng 
			if (!empty($condition)) {
				$sql.=" WHERE";
				foreach ($condition as $key => $value) {
					$sql.= " $key = '$value' AND";
				}
				$sql = trim($sql, "AND");
			}
			//Bước 3: Chạy câu lệnh
			$query = mysqli_query($this->conn,$sql);
			//Bước 4: Khởi tạo 1 biến mảng và lặp hết dữ liệu lấy được từ câu truy vấn ở trên cho vào mảng đó
			$result = array();
			if ($query) {
				while ($row = mysqli_fetch_assoc($query)) {
					$result[] = $row;
				}
			}
			//Bước 5: Cho hàm trả về giá trị 
			return $result;
		}


		//hàm thêm dữ liệu vào Bảng
		public function insert($table,$data=array())
		{
			//Bước 1:Lấy giá trị của key cho vòa 1 mảng
			$keys = array_keys($data);
			//Bước 2: xử lí chuỗi với mảng ở trên
			$fields =  implode(",", $keys);

			//Bước 3: xử lí giá trị value
			$value_str ='';
			foreach ($data as $key => $value) {
				$value_str .="'$value',"; 
			}
			//Bước 4: xóa dấu phẩy ở cuối đi
			$value_str = trim($value_str, ",");
			//Bước 5: Lên cấu trúc câu lệnh sql
			$sql = "INSERT INTO $table ($fields) VALUES ($value_str)";
			//Bước 6: Chạy câu lệnh sql
			$query = mysqli_query($this->conn,$sql);
			//Bước 7: Trả về giá trị boolean true/false
			return $query;
		}

		//Hàm update dữ liệu vào 1 bảng theo điều kiện
		public function update($table,$data=array(),$condition=array())
		{	
			//Bước 1: Xử lí chuỗi giá trị
			$str = '';
			foreach ($data as $key => $value) {
				$str .="$key = '$value',"; 
			}
			//Bước 2: Xóa dấu phẩy ở cuối
			$str = trim($str,",");
			//Bước 3: Viết cấu trúc câu lênh sql
			$sql = "UPDATE $table SET $str WHERE ";
			foreach ($condition as $key => $value) {
				$sql.= "$key = '$value' AND";
			}
			$sql = trim($sql,'AND');
			//Bước 4: chạy câu lệnh sql
			$query = mysqli_query($this->conn,$sql);
			//Bước 5: trả về giá trị boolean true/false
			return $query;
		}

		//hàm xóa dữ liệu
		public function delete($table,$condition=array())
		{
			//Bước 1: lên cấu trúc câu lệnh sql
			$sql = " DELETE FROM $table WHERE ";
			//Bước 2: Cộng chuỗi theo điều kiện
			foreach ($condition as $key => $value) {
				$sql.= "$key = '$value' AND";
			}
			$sql = trim($sql,'AND');
			//Bước 3: Chạy câu lệnh sql
			$query = mysqli_query($this->conn,$sql);
			//Bước 4: Trả về giá trị boolean
			return $query;
		}
	}