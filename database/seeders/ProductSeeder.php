<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $products = [
            [
                'ID_Category' => 1,
                'ID_Brand' => 1,
                'Ten_SP' => 'Giày Nike Air Force 1 ’07 ‘White’ 315122-111',

                'Gia_SP' => 800.000,
                'Gia_SP2' => 800.000,
                'Mo_Ta' => 'Mua Giày Nike Air Jordan 1 Low ‘Panda’ DC0774-101 chính hãng 100% có sẵn tại Authentic Shoes. Giao hàng miễn phí trong 1 ngày.Cam kết đền tiền X5 nếu phát hiện Fake. Đổi trả miễn phí size. FREE vệ sinh giày trọn đời. MUA NGAY!',
                'Anh_SP1' => 'https://cdn.authentic-shoes.com/wp-content/uploads/2023/04/240_01.jpg_34183f6907ea4533beb58f70876f9325.jpeg',
                'Anh_SP2' => 'https://www.chuphinhsanpham.vn/wp-content/uploads/2021/06/chup-hinh-giay-dincox-shoes-c-photo-studio-4.jpg',
            ],
            [
                'ID_Category' => 1,
                'ID_Brand' => 1,
                'Ten_SP' => 'Giày Nike Air Force 1 ’07 ‘White’ 315122-111',
                'Gia_SP' => 800.000,
                'Gia_SP2' => 800.000,
                'Mo_Ta' => 'Mua Giày Nike Air Jordan 1 Low ‘Panda’ DC0774-101 chính hãng 100% có sẵn tại Authentic Shoes. Giao hàng miễn phí trong 1 ngày.Cam kết đền tiền X5 nếu phát hiện Fake. Đổi trả miễn phí size. FREE vệ sinh giày trọn đời. MUA NGAY!',
                'Anh_SP1' => 'https://cdn.authentic-shoes.com/wp-content/uploads/2023/04/240_01.jpg_34183f6907ea4533beb58f70876f9325.jpeg',
                'Anh_SP2' => 'https://www.chuphinhsanpham.vn/wp-content/uploads/2021/06/chup-hinh-giay-dincox-shoes-c-photo-studio-4.jpg',
            ],
            [
                'ID_Category' => 1,
                'ID_Brand' => 1,
                'Ten_SP' => 'Giày Nike Air Force 1 ’07 ‘White’ 315122-111',

                'Gia_SP' => 800.000,
                'Gia_SP2' => 800.000,
                'Mo_Ta' => 'Mua Giày Nike Air Jordan 1 Low ‘Panda’ DC0774-101 chính hãng 100% có sẵn tại Authentic Shoes. Giao hàng miễn phí trong 1 ngày.Cam kết đền tiền X5 nếu phát hiện Fake. Đổi trả miễn phí size. FREE vệ sinh giày trọn đời. MUA NGAY!',
                'Anh_SP1' => 'https://cdn.authentic-shoes.com/wp-content/uploads/2023/04/240_01.jpg_34183f6907ea4533beb58f70876f9325.jpeg',
                'Anh_SP2' => 'https://www.chuphinhsanpham.vn/wp-content/uploads/2021/06/chup-hinh-giay-dincox-shoes-c-photo-studio-4.jpg',
            ],
            [
                'ID_Category' => 1,
                'ID_Brand' => 1,
                'Ten_SP' => 'Giày Nike Air Force 1 ’07 ‘White’ 315122-111',

                'Gia_SP' => 800.000,
                'Gia_SP2' => 800.000,
                'Mo_Ta' => 'Mua Giày Nike Air Jordan 1 Low ‘Panda’ DC0774-101 chính hãng 100% có sẵn tại Authentic Shoes. Giao hàng miễn phí trong 1 ngày.Cam kết đền tiền X5 nếu phát hiện Fake. Đổi trả miễn phí size. FREE vệ sinh giày trọn đời. MUA NGAY!',
                'Anh_SP1' => 'https://cdn.authentic-shoes.com/wp-content/uploads/2023/04/240_01.jpg_34183f6907ea4533beb58f70876f9325.jpeg',
                'Anh_SP2' => 'https://www.chuphinhsanpham.vn/wp-content/uploads/2021/06/chup-hinh-giay-dincox-shoes-c-photo-studio-4.jpg',
            ],
            [
                'ID_Category' => 2,
                'ID_Brand' => 2,
                'Ten_SP' => 'Giày Nike Air Jordan 1 Low ‘Obsidian Ember Glow’ 553558-481',

                'Gia_SP' => 500.000,
                'Gia_SP2' => 800.000,
                'Mo_Ta' => 'Mua Giày Nike Air Jordan 1 Low ‘Panda’ DC0774-101 chính hãng 100% có sẵn tại Authentic Shoes. Giao hàng miễn phí trong 1 ngày.Cam kết đền tiền X5 nếu phát hiện Fake. Đổi trả miễn phí size. FREE vệ sinh giày trọn đời. MUA NGAY!',
                'Anh_SP1' => 'https://cdn.authentic-shoes.com/wp-content/uploads/2023/06/Giay-Nike-Jordan-1-Low-Obsidian-Ember-Glow-553558-481.png',
                'Anh_SP2' => 'https://www.chuphinhsanpham.vn/wp-content/uploads/2021/06/chup-hinh-giay-dincox-shoes-c-photo-studio-4.jpg',
            ],
            [
                'ID_Category' => 2,
                'ID_Brand' => 2,
                'Ten_SP' => 'Giày Nike Air Jordan 1 Low ‘Obsidian Ember Glow’ 553558-481',

                'Gia_SP' => 500.000,
                'Gia_SP2' => 800.000,
                'Mo_Ta' => 'Mua Giày Nike Air Jordan 1 Low ‘Panda’ DC0774-101 chính hãng 100% có sẵn tại Authentic Shoes. Giao hàng miễn phí trong 1 ngày.Cam kết đền tiền X5 nếu phát hiện Fake. Đổi trả miễn phí size. FREE vệ sinh giày trọn đời. MUA NGAY!',
                'Anh_SP1' => 'https://cdn.authentic-shoes.com/wp-content/uploads/2023/06/Giay-Nike-Jordan-1-Low-Obsidian-Ember-Glow-553558-481.png',
                'Anh_SP2' => 'https://www.chuphinhsanpham.vn/wp-content/uploads/2021/06/chup-hinh-giay-dincox-shoes-c-photo-studio-4.jpg',
            ],
            [
                'ID_Category' => 2,
                'ID_Brand' => 2,
                'Ten_SP' => 'Giày Nike Air Jordan 1 Low ‘Obsidian Ember Glow’ 553558-481',

                'Gia_SP' => 500.000,
                'Gia_SP2' => 800.000,
                'Mo_Ta' => 'Mua Giày Nike Air Jordan 1 Low ‘Panda’ DC0774-101 chính hãng 100% có sẵn tại Authentic Shoes. Giao hàng miễn phí trong 1 ngày.Cam kết đền tiền X5 nếu phát hiện Fake. Đổi trả miễn phí size. FREE vệ sinh giày trọn đời. MUA NGAY!',
                'Anh_SP1' => 'https://cdn.authentic-shoes.com/wp-content/uploads/2023/06/Giay-Nike-Jordan-1-Low-Obsidian-Ember-Glow-553558-481.png',
                'Anh_SP2' => 'https://www.chuphinhsanpham.vn/wp-content/uploads/2021/06/chup-hinh-giay-dincox-shoes-c-photo-studio-4.jpg',
            ],
            [
                'ID_Category' => 2,
                'ID_Brand' => 2,
                'Ten_SP' => 'Giày Nike Air Jordan 1 Low ‘Obsidian Ember Glow’ 553558-481',

                'Gia_SP' => 500.000,
                'Gia_SP2' => 800.000,
                'Mo_Ta' => 'Mua Giày Nike Air Jordan 1 Low ‘Panda’ DC0774-101 chính hãng 100% có sẵn tại Authentic Shoes. Giao hàng miễn phí trong 1 ngày.Cam kết đền tiền X5 nếu phát hiện Fake. Đổi trả miễn phí size. FREE vệ sinh giày trọn đời. MUA NGAY!',
                'Anh_SP1' => 'https://cdn.authentic-shoes.com/wp-content/uploads/2023/06/Giay-Nike-Jordan-1-Low-Obsidian-Ember-Glow-553558-481.png',
                'Anh_SP2' => 'https://www.chuphinhsanpham.vn/wp-content/uploads/2021/06/chup-hinh-giay-dincox-shoes-c-photo-studio-4.jpg',
            ],
            [
                'ID_Category' => 2,
                'ID_Brand' => 2,
                'Ten_SP' => 'Giày Nike Air Jordan 1 Low ‘Obsidian Ember Glow’ 553558-481',

                'Gia_SP' => 500.000,
                'Gia_SP2' => 800.000,
                'Mo_Ta' => 'Mua Giày Nike Air Jordan 1 Low ‘Panda’ DC0774-101 chính hãng 100% có sẵn tại Authentic Shoes. Giao hàng miễn phí trong 1 ngày.Cam kết đền tiền X5 nếu phát hiện Fake. Đổi trả miễn phí size. FREE vệ sinh giày trọn đời. MUA NGAY!',
                'Anh_SP1' => 'https://cdn.authentic-shoes.com/wp-content/uploads/2023/06/Giay-Nike-Jordan-1-Low-Obsidian-Ember-Glow-553558-481.png',
                'Anh_SP2' => 'https://www.chuphinhsanpham.vn/wp-content/uploads/2021/06/chup-hinh-giay-dincox-shoes-c-photo-studio-4.jpg',
            ],
            [
                'ID_Category' => 2,
                'ID_Brand' => 2,
                'Ten_SP' => 'Giày Nike Air Jordan 1 Low ‘Obsidian Ember Glow’ 553558-481',

                'Gia_SP' => 500.000,
                'Gia_SP2' => 800.000,
                'Mo_Ta' => 'Mua Giày Nike Air Jordan 1 Low ‘Panda’ DC0774-101 chính hãng 100% có sẵn tại Authentic Shoes. Giao hàng miễn phí trong 1 ngày.Cam kết đền tiền X5 nếu phát hiện Fake. Đổi trả miễn phí size. FREE vệ sinh giày trọn đời. MUA NGAY!',
                'Anh_SP1' => 'https://cdn.authentic-shoes.com/wp-content/uploads/2023/06/Giay-Nike-Jordan-1-Low-Obsidian-Ember-Glow-553558-481.png',
                'Anh_SP2' => 'https://www.chuphinhsanpham.vn/wp-content/uploads/2021/06/chup-hinh-giay-dincox-shoes-c-photo-studio-4.jpg',
            ],
            [
                'ID_Category' => 2,
                'ID_Brand' => 2,
                'Ten_SP' => 'Giày Nike Air Jordan 1 Low ‘Obsidian Ember Glow’ 553558-481',

                'Gia_SP' => 500.000,
                'Gia_SP2' => 800.000,
                'Mo_Ta' => 'Mua Giày Nike Air Jordan 1 Low ‘Panda’ DC0774-101 chính hãng 100% có sẵn tại Authentic Shoes. Giao hàng miễn phí trong 1 ngày.Cam kết đền tiền X5 nếu phát hiện Fake. Đổi trả miễn phí size. FREE vệ sinh giày trọn đời. MUA NGAY!',
                'Anh_SP1' => 'https://cdn.authentic-shoes.com/wp-content/uploads/2023/06/Giay-Nike-Jordan-1-Low-Obsidian-Ember-Glow-553558-481.png',
                'Anh_SP2' => 'https://www.chuphinhsanpham.vn/wp-content/uploads/2021/06/chup-hinh-giay-dincox-shoes-c-photo-studio-4.jpg',
            ],
            [
                'ID_Category' => 3,
                'ID_Brand' => 1,
                'Ten_SP' => 'Giày New Balance 550 ‘White Grey’ BB550PB1',
                'Gia_SP' => 500.000,
                'Gia_SP2' => 800.000,
                'Mo_Ta' => 'Mua Giày Nike Air Jordan 1 Low ‘Panda’ DC0774-101 chính hãng 100% có sẵn tại Authentic Shoes. Giao hàng miễn phí trong 1 ngày.Cam kết đền tiền X5 nếu phát hiện Fake. Đổi trả miễn phí size. FREE vệ sinh giày trọn đời. MUA NGAY!',
                'Anh_SP1' => 'https://cdn.authentic-shoes.com/wp-content/uploads/2023/04/731742_01.jpg_6da018b782a34311b78d63b79fe4a28a.png',
                'Anh_SP2' => 'https://cdn.authentic-shoes.com/wp-content/uploads/2023/04/800x__7__2ebf1bb72b79416eb92f76cf7d059ebf-600x596.png',
            ],
            [
                'ID_Category' => 3,
                'ID_Brand' => 1,
                'Ten_SP' => 'Giày New Balance 550 ‘White Grey’ BB550PB1',
                'Gia_SP' => 500.000,
                'Gia_SP2' => 800.000,
                'Mo_Ta' => 'Mua Giày Nike Air Jordan 1 Low ‘Panda’ DC0774-101 chính hãng 100% có sẵn tại Authentic Shoes. Giao hàng miễn phí trong 1 ngày.Cam kết đền tiền X5 nếu phát hiện Fake. Đổi trả miễn phí size. FREE vệ sinh giày trọn đời. MUA NGAY!',
                'Anh_SP1' => 'https://cdn.authentic-shoes.com/wp-content/uploads/2023/04/731742_01.jpg_6da018b782a34311b78d63b79fe4a28a.png',
                'Anh_SP2' => 'https://cdn.authentic-shoes.com/wp-content/uploads/2023/04/800x__7__2ebf1bb72b79416eb92f76cf7d059ebf-600x596.png',
            ],
            [
                'ID_Category' => 3,
                'ID_Brand' => 1,
                'Ten_SP' => 'Giày New Balance 550 ‘White Grey’ BB550PB1',
                'Gia_SP' => 500.000,
                'Gia_SP2' => 800.000,
                'Mo_Ta' => 'Mua Giày Nike Air Jordan 1 Low ‘Panda’ DC0774-101 chính hãng 100% có sẵn tại Authentic Shoes. Giao hàng miễn phí trong 1 ngày.Cam kết đền tiền X5 nếu phát hiện Fake. Đổi trả miễn phí size. FREE vệ sinh giày trọn đời. MUA NGAY!',
                'Anh_SP1' => 'https://cdn.authentic-shoes.com/wp-content/uploads/2023/04/731742_01.jpg_6da018b782a34311b78d63b79fe4a28a.png',
                'Anh_SP2' => 'https://cdn.authentic-shoes.com/wp-content/uploads/2023/04/800x__7__2ebf1bb72b79416eb92f76cf7d059ebf-600x596.png',
            ],
            [
                'ID_Category' => 3,
                'ID_Brand' => 1,
                'Ten_SP' => 'Giày New Balance 550 ‘White Grey’ BB550PB1',
                'Gia_SP' => 500.000,
                'Gia_SP2' => 800.000,
                'Mo_Ta' => 'Mua Giày Nike Air Jordan 1 Low ‘Panda’ DC0774-101 chính hãng 100% có sẵn tại Authentic Shoes. Giao hàng miễn phí trong 1 ngày.Cam kết đền tiền X5 nếu phát hiện Fake. Đổi trả miễn phí size. FREE vệ sinh giày trọn đời. MUA NGAY!',
                'Anh_SP1' => 'https://cdn.authentic-shoes.com/wp-content/uploads/2023/04/731742_01.jpg_6da018b782a34311b78d63b79fe4a28a.png',
                'Anh_SP2' => 'https://cdn.authentic-shoes.com/wp-content/uploads/2023/04/800x__7__2ebf1bb72b79416eb92f76cf7d059ebf-600x596.png',
            ],
            [
                'ID_Category' => 4,
                'ID_Brand' => 6,
                'Ten_SP' => 'Kính Gentle Monster South Side N 01',
                'Gia_SP' => 600.000,
                'Gia_SP2' => 800.000,
                'Mo_Ta' => 'Mua Giày Nike Air Jordan 1 Low ‘Panda’ DC0774-101 chính hãng 100% có sẵn tại Authentic Shoes. Giao hàng miễn phí trong 1 ngày.Cam kết đền tiền X5 nếu phát hiện Fake. Đổi trả miễn phí size. FREE vệ sinh giày trọn đời. MUA NGAY!',
                'Anh_SP1' => 'https://cdn.authentic-shoes.com/wp-content/uploads/2023/04/jfhawjf_c4760653bb30444f8cc6914abb2050f3-600x201.png',
                'Anh_SP2' => 'https://cdn.authentic-shoes.com/wp-content/uploads/2023/04/11001_2040442012219328502_06_d2216c4972ce45b89f996b9ad9eed49b-600x600.png',
            ],
            [
                'ID_Category' => 4,
                'ID_Brand' => 6,
                'Ten_SP' => 'Kính Gentle Monster South Side N 01',
                'Gia_SP' => 600.000,
                'Gia_SP2' => 800.000,
                'Mo_Ta' => 'Mua Giày Nike Air Jordan 1 Low ‘Panda’ DC0774-101 chính hãng 100% có sẵn tại Authentic Shoes. Giao hàng miễn phí trong 1 ngày.Cam kết đền tiền X5 nếu phát hiện Fake. Đổi trả miễn phí size. FREE vệ sinh giày trọn đời. MUA NGAY!',
                'Anh_SP1' => 'https://cdn.authentic-shoes.com/wp-content/uploads/2023/04/jfhawjf_c4760653bb30444f8cc6914abb2050f3-600x201.png',
                'Anh_SP2' => 'https://cdn.authentic-shoes.com/wp-content/uploads/2023/04/11001_2040442012219328502_06_d2216c4972ce45b89f996b9ad9eed49b-600x600.png',
            ],
            [
                'ID_Category' => 4,
                'ID_Brand' => 6,
                'Ten_SP' => 'Kính Gentle Monster South Side N 01',
                'Gia_SP' => 600.000,
                'Gia_SP2' => 800.000,
                'Mo_Ta' => 'Mua Giày Nike Air Jordan 1 Low ‘Panda’ DC0774-101 chính hãng 100% có sẵn tại Authentic Shoes. Giao hàng miễn phí trong 1 ngày.Cam kết đền tiền X5 nếu phát hiện Fake. Đổi trả miễn phí size. FREE vệ sinh giày trọn đời. MUA NGAY!',
                'Anh_SP1' => 'https://cdn.authentic-shoes.com/wp-content/uploads/2023/04/jfhawjf_c4760653bb30444f8cc6914abb2050f3-600x201.png',
                'Anh_SP2' => 'https://cdn.authentic-shoes.com/wp-content/uploads/2023/04/11001_2040442012219328502_06_d2216c4972ce45b89f996b9ad9eed49b-600x600.png',
            ],
            [
                'ID_Category' => 4,
                'ID_Brand' => 6,
                'Ten_SP' => 'Kính Gentle Monster South Side N 01',
                'Gia_SP' => 600.000,
                'Gia_SP2' => 800.000,
                'Mo_Ta' => 'Mua Giày Nike Air Jordan 1 Low ‘Panda’ DC0774-101 chính hãng 100% có sẵn tại Authentic Shoes. Giao hàng miễn phí trong 1 ngày.Cam kết đền tiền X5 nếu phát hiện Fake. Đổi trả miễn phí size. FREE vệ sinh giày trọn đời. MUA NGAY!',
                'Anh_SP1' => 'https://cdn.authentic-shoes.com/wp-content/uploads/2023/04/jfhawjf_c4760653bb30444f8cc6914abb2050f3-600x201.png',
                'Anh_SP2' => 'https://cdn.authentic-shoes.com/wp-content/uploads/2023/04/11001_2040442012219328502_06_d2216c4972ce45b89f996b9ad9eed49b-600x600.png',
            ],
        ];
        foreach ($products as &$product) {
            // Tạo slug cho từng sản phẩm
            $product['slug'] = $this->generateUniqueSlug($product['Ten_SP']);
            // Chèn dữ liệu vào cơ sở dữ liệu
            DB::table('products')->insert($product);
        }
    }
    /**
     * Generate slug từ tên sản phẩm.
     *
     * @param string $name
     * @return string
     */
    private function generateUniqueSlug(string $name): string
    {
        // Loại bỏ dấu cách và các ký tự đặc biệt, thay thế chúng bằng gạch ngang
        $slug = preg_replace('/[^A-Za-z0-9-]+/', '-', $name);
        // Chuyển đổi slug thành chữ thường
        $slug = strtolower($slug);
        // Loại bỏ các ký tự gạch ngang ở đầu và cuối chuỗi
        $slug = trim($slug, '-');

        // Kiểm tra xem slug đã tồn tại trong cơ sở dữ liệu chưa
        $existingSlug = DB::table('products')->where('slug', $slug)->exists();
        
        // Nếu slug đã tồn tại, thêm số ngẫu nhiên vào cuối slug để tạo slug duy nhất
        if ($existingSlug) {
            $slug .= '-' . uniqid();
        }

        return $slug;
    }
}