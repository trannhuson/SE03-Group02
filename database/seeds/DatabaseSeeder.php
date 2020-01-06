<?php

use Illuminate\Database\Seeder;



class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(UsersDatabaseSeeder::class);
        $this->call(CategoriesDatabaseSeeder::class);
        $this->call(CustomersDatabaseSeeder::class);
        $this->call(BrandsDatabaseSeeder::class);
    }
}

class UsersDatabaseSeeder extends Seeder
{
	public function run() {
		$now = date('Y-m-d H:i:s');
		DB::table('users')->insert([
			['name'=>'Viet Hai', 'email'=>'viethai.trx@gmail.com', 'password'=>'123456', 'created_at'=>$now],
			['name'=>'Quang', 'email'=>'quang@gmail.com', 'password'=>'111111', 'created_at'=>$now],
		]);
	}
}

class CategoriesDatabaseSeeder extends Seeder
{
	public function run() {
		$now = date('Y-m-d H:i:s');
		DB::table('categories')->insert([
			['name'=>'Điện thoại', 'created_at'=>$now],
			['name'=>'Đồng hồ', 'created_at'=>$now],
			['name'=>'Laptop', 'created_at'=>$now],
			['name'=>'Máy tính bảng', 'created_at'=>$now],
			['name'=>'Phụ kiện', 'created_at'=>$now],
		]);
	}
}

class CustomersDatabaseSeeder extends Seeder
{
	public function run() {
		$now = date('Y-m-d H:i:s');
		DB::table('customers')->insert([
			['name'=>'Customer 1', 'username'=>'customer1', 'password'=>'123456', 'email'=>'customer1@gmail.com', 'address'=>'Hanoi', 'phone_number'=>'0912345678', 'created_at'=>$now],
			['name'=>'Customer 2', 'username'=>'customer2', 'password'=>'123456', 'email'=>'customer2@gmail.com', 'address'=>'TPHCM', 'phone_number'=>'0911111111', 'created_at'=>$now],
		]);
	}
}

class BrandsDatabaseSeeder extends Seeder
{
	public function run() {
		$now = date('Y-m-d H:i:s');
		DB::table('brands')->insert([
			['name'=>'Apple', 'created_at'=>$now],
			['name'=>'Samsung', 'created_at'=>$now],
			['name'=>'Xiaomi', 'created_at'=>$now],
		]);
	}
}