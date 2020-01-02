<?php

use Illuminate\Database\Seeder;

class ThemCauHoiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        App\CauHoi::create([
            'noi_dung' => 'Giải Grand Slam đầu tiên trong năm là giải nào?',
            'linh_vuc_id' => '1',
            'phuong_an_a' => 'Austrlia mở rộng',
            'phuong_an_b' => 'Wimbledon',
            'phuong_an_c' => 'Roland Garos',
            'phuong_an_d' => 'Mỹ mở rộng',            
            'dap_an' => 'A',
        ]);

        App\CauHoi::create([
            'noi_dung' => 'Cùng với Hà Nội T&T (vô địch V-League 2010), CLB nào của Việt Nam tham dự AFC Cup 2011?',
            'linh_vuc_id' => '1',
            'phuong_an_a' => 'Sông Lam Nghệ An',
            'phuong_an_b' => 'SHB Đà Nẵng',
            'phuong_an_c' => 'Hoàng Anh Gia Lai',
            'phuong_an_d' => 'Becamex Bình Dương',            
            'dap_an' => 'A',
        ]);

        App\CauHoi::create([
            'noi_dung' => 'AFC Asian Cup 2011 được tổ chức tại quốc gia nào?',
            'linh_vuc_id' => '1',
            'phuong_an_a' => 'Qatar',
            'phuong_an_b' => 'SHB Đà Nẵng',
            'phuong_an_c' => 'Hoàng Anh Gia Lai',
            'phuong_an_d' => 'Becamex Bình Dương',            
            'dap_an' => 'A',
        ]);

        App\CauHoi::create([
            'noi_dung' => 'Đội nào lên ngôi vô địch AFC Asian Cup 2011 tổ chức tại Qatar?',
            'linh_vuc_id' => '1',
            'phuong_an_a' => 'Nhật Bản',
            'phuong_an_b' => 'Australia',
            'phuong_an_c' => 'Hàn Quốc',
            'phuong_an_d' => 'Uzbekistan',            
            'dap_an' => 'A',
        ]);

        App\CauHoi::create([
            'noi_dung' => 'Việt Nam lần đầu tiên vô địch AFF Cup là vào năm nào?',
            'linh_vuc_id' => '1',
            'phuong_an_a' => '2004',
            'phuong_an_b' => '2006',
            'phuong_an_c' => '2008',
            'phuong_an_d' => '2010',            
            'dap_an' => 'A',
        ]);

        App\CauHoi::create([
            'noi_dung' => 'Đại Ngu là quốc hiệu của triều đại nào?',
            'linh_vuc_id' => '2',
            'phuong_an_a' => 'Triều Ngô',
            'phuong_an_b' => 'Triều Hồ',
            'phuong_an_c' => 'Các chúa Nguyễn',
            'phuong_an_d' => 'Nhà Tây Sơn',            
            'dap_an' => 'A',
        ]);

        App\CauHoi::create([
            'noi_dung' => 'Các vua Hùng đặt quốc hiệu nước ta là gì?',
            'linh_vuc_id' => '2',
            'phuong_an_a' => 'Văn Lang',
            'phuong_an_b' => 'Âu Lạc',
            'phuong_an_c' => 'Vạn Xuân',
            'phuong_an_d' => 'Đại Việt',            
            'dap_an' => 'A',
        ]);

        App\CauHoi::create([
            'noi_dung' => 'An Dương Vương đặt quốc hiệu nước ta là gì?',
            'linh_vuc_id' => '2',
            'phuong_an_a' => 'Âu Lạc',
            'phuong_an_b' => 'Vạn Xuân',
            'phuong_an_c' => 'Đại Cồ Việt',
            'phuong_an_d' => 'Đại Việt',            
            'dap_an' => 'A',
        ]);

        App\CauHoi::create([
            'noi_dung' => 'Năm 1010, Lý Thái Tổ đã cho xây dựng điện nào ở trung tâm hoàng thành Thăng Long?',
            'linh_vuc_id' => '2',
            'phuong_an_a' => 'Điện Kính Thiên',
            'phuong_an_b' => 'Điện Càn Nguyên',
            'phuong_an_c' => 'Điện Càn Chánh',
            'phuong_an_d' => 'Điện Càn Thành',            
            'dap_an' => 'A',
        ]);

        App\CauHoi::create([
            'noi_dung' => 'Thành cổ Sơn Tây do vị vua nào xây dựng nên vào năm 1822?',
            'linh_vuc_id' => '2',
            'phuong_an_a' => 'Gia Long',
            'phuong_an_b' => 'Minh Mạng',
            'phuong_an_c' => 'Thiệu Trị',
            'phuong_an_d' => 'Tự Đức',            
            'dap_an' => 'A',
        ]);

        App\CauHoi::create([
            'noi_dung' => 'Ai là nhạc sĩ Việt Nam đầu tiên viết opera với tác phẩm “Cô sao” và sau đó là “Người tạc tượng”?',
            'linh_vuc_id' => '3',
            'phuong_an_a' => 'Đỗ Nhuận',
            'phuong_an_b' => 'Hoàng Vân',
            'phuong_an_c' => 'Trần Hoàn',
            'phuong_an_d' => 'Trọng Đài',            
            'dap_an' => 'A',
        ]);

        App\CauHoi::create([
            'noi_dung' => 'The ASEAN WAY-ca khúc chính thức của ASEAN là sáng tác của nhạc sĩ người nước nào?',
            'linh_vuc_id' => '3',
            'phuong_an_a' => 'Thái Lan',
            'phuong_an_b' => 'Việt Nam',
            'phuong_an_c' => 'Singapore',
            'phuong_an_d' => 'Malaysia',            
            'dap_an' => 'A',
        ]);

        App\CauHoi::create([
            'noi_dung' => 'Bộ phim “The Social Network” về mạng xã hội nào đã đạt giải Quả cầu vàng 2011?',
            'linh_vuc_id' => '3',
            'phuong_an_a' => 'Facebook',
            'phuong_an_b' => 'Twitter',
            'phuong_an_c' => 'Yahoo Plus',
            'phuong_an_d' => 'Opera',            
            'dap_an' => 'A',
        ]);
        App\CauHoi::create([
            'noi_dung' => '“Mùa con ong đi lấy mật, mùa con voi xuống sông hút nước, mùa em đi phát rẫy làm nương, anh vào rừng đặt bẫy cài chông” là những câu hát nói về tháng nào?',
            'linh_vuc_id' => '3',
            'phuong_an_a' => 'Tháng Giêng',
            'phuong_an_b' => 'Tháng hai',
            'phuong_an_c' => 'Tháng ba',
            'phuong_an_d' => 'Tháng tư',            
            'dap_an' => 'A',
        ]);
        App\CauHoi::create([
            'noi_dung' => 'Lã Thanh Huyền đã tham gia bộ phim nào sau đây?',
            'linh_vuc_id' => '3',
            'phuong_an_a' => 'Nhà có nhiều cửa sổ',
            'phuong_an_b' => 'Đẹp từng centimet',
            'phuong_an_c' => 'Blog nàng dâu',
            'phuong_an_d' => 'Ngôi nhà hạnh phúc',            
            'dap_an' => 'A',
        ]);

        App\CauHoi::create([
            'noi_dung' => 'Sông Bến Hải và sông Thạch Hãn nằm ở tỉnh nào?',
            'linh_vuc_id' => ' 4',
            'phuong_an_a' => 'Quảng Bình',
            'phuong_an_b' => 'Quảng Ninh',
            'phuong_an_c' => 'Quảng Trị',
            'phuong_an_d' => 'Quảng Ngãi',            
            'dap_an' => 'A',
        ]);

        App\CauHoi::create([
            'noi_dung' => 'Trong các cây cầu sau, cầu nào là cầu xoay?',
            'linh_vuc_id' => '4',
            'phuong_an_a' => 'Cầu Thanh Trì',
            'phuong_an_b' => 'Cầu Thị Nại',
            'phuong_an_c' => 'Cầu Sông Hàn',
            'phuong_an_d' => 'Cầu Cần Thơ',            
            'dap_an' => 'A',
        ]);

        App\CauHoi::create([
            'noi_dung' => 'Bùi Hữu Nghĩa, một trong bốn rồng vàng của vùng Đồng Nai xưa (tức là toàn Nam Bộ ngày nay) là tài năng ở lĩnh vực nào?',
            'linh_vuc_id' => '4',
            'phuong_an_a' => 'Hoạ',
            'phuong_an_b' => 'Phú',
            'phuong_an_c' => 'Đàn',
            'phuong_an_d' => 'Thi',            
            'dap_an' => 'A',
        ]);
        App\CauHoi::create([
            'noi_dung' => 'Nước nào ở khu vực Đông Nam Á không có địa giới với bất kỳ nước khác?',
            'linh_vuc_id' => '4',
            'phuong_an_a' => 'Philippines',
            'phuong_an_b' => 'Malaysia',
            'phuong_an_c' => 'Lào',
            'phuong_an_d' => 'Thái Lan',            
            'dap_an' => 'A',
        ]);
        App\CauHoi::create([
            'noi_dung' => 'Thung lũng nổi tiếng ở Mỹ với ngành công nghệ thông tin được đặt tên theo nguyên tố nào?',
            'linh_vuc_id' => '4',
            'phuong_an_a' => 'Sắt',
            'phuong_an_b' => 'Silic',
            'phuong_an_c' => 'Asen',
            'phuong_an_d' => 'Uran',            
            'dap_an' => 'A',
        ]);
        App\CauHoi::create([
            'noi_dung' => '"Điêu tàn" là tập thơ đầu tiên của nhà thơ nào?',
            'linh_vuc_id' => '5',
            'phuong_an_a' => 'Anh Thơ',
            'phuong_an_b' => 'Thế Lữ',
            'phuong_an_c' => 'Bích Khê',
            'phuong_an_d' => 'Chế Lan Viên',            
            'dap_an' => 'A',
        ]);
        App\CauHoi::create([
            'noi_dung' => 'Điền từ còn thiếu trong câu thành ngữ:’”…. Không cứu được …gần”.',
            'linh_vuc_id' => '5',
            'phuong_an_a' => 'Lính-Tướng',
            'phuong_an_b' => 'Chồng-Vợ',
            'phuong_an_c' => 'Nước-Lửa',
            'phuong_an_d' => 'Chó-Mèo',            
            'dap_an' => 'A',
        ]);
        App\CauHoi::create([
            'noi_dung' => ': Truyện “Vợ chồng A Phủ” trong tập truyện Tây Bắc của nhà văn Tô Hoài viết về người dân tộc nào?',
            'linh_vuc_id' => '5',
            'phuong_an_a' => 'Vân Kiều',
            'phuong_an_b' => 'Thái',
            'phuong_an_c' => 'H’Mông',
            'phuong_an_d' => 'Tày',            
            'dap_an' => 'A',
        ]);
        App\CauHoi::create([
            'noi_dung' => 'Tác phẩm "Thuỷ hử" của Thi Nại Am diễn ra vào triều đại nào của Trung Quốc?  ',
            'linh_vuc_id' => '5',
            'phuong_an_a' => 'Triều Tống',
            'phuong_an_b' => 'Triều Nguyên',
            'phuong_an_c' => 'Triều Minh',
            'phuong_an_d' => 'Triều Thanh ',            
            'dap_an' => 'A',
        ]);
        App\CauHoi::create([
            'noi_dung' => 'Truyền kỳ mạn lục, một tác phẩm được đánh giá là " thiên cổ kỳ bút", là "áng văn hay của bậc đại gia", là sáng tác của ai?',
            'linh_vuc_id' => '5',
            'phuong_an_a' => 'Nguyễn Trãi',
            'phuong_an_b' => 'Nguyễn Bỉnh Khiêm',
            'phuong_an_c' => 'Nguyễn Dữ',
            'phuong_an_d' => 'Nguyễn Du',            
            'dap_an' => 'A',
        ]);
        // App\CauHoi::create([
        //     'noi_dung' => '',
        //     'linh_vuc_id' => '6',
        //     'phuong_an_a' => '',
        //     'phuong_an_b' => '',
        //     'phuong_an_c' => '',
        //     'phuong_an_d' => '',            
        //     'dap_an' => 'A',
        // ]);

        // App\CauHoi::create([
        //     'noi_dung' => '',
        //     'linh_vuc_id' => '7',
        //     'phuong_an_a' => '',
        //     'phuong_an_b' => '',
        //     'phuong_an_c' => '',
        //     'phuong_an_d' => '',            
        //     'dap_an' => 'A',
        // ]);

        // App\CauHoi::create([
        //     'noi_dung' => '',
        //     'linh_vuc_id' => '8',
        //     'phuong_an_a' => '',
        //     'phuong_an_b' => '',
        //     'phuong_an_c' => '',
        //     'phuong_an_d' => '',            
        //     'dap_an' => 'A',
        // ]);


    }
}
