<?php

use Illuminate\Database\Seeder;
use App\Admin;
use App\Models\TypeJob;
use App\Models\Career;
use App\Models\Grade;
use App\Models\Salary;
use App\Models\Experience;
use App\Models\Degree;
use App\Models\City;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
         // Thêm dữ liệu bảng TypeJob
        $TypeJobs = [            
            ['name' => "Nhân viên chính thức"],
            ['name' => "Nhân viên thời vụ"],
            ['name' => "Bán thời gian"],
            ['name' => "Làm thêm ngoài giờ"],
            ['name' => "Thực tập và dự án"],
        ];
        foreach ($TypeJobs as $TypeJobs) {
            TypeJob::create($TypeJobs);
        }

        // Thêm dữ liệu bảng Grade
        $Grade = [            
            ['name' => "Mới tốt nghiệp / Thực tập sinh"],
            ['name' => "Nhân viên"],
            ['name' => "Trưởng nhóm"],
            ['name' => "Trưởng phòng"],
            ['name' => "Phó giám đốc"],
            ['name' => "Giám đốc"],
            ['name' => "Tổng giám đốc điều hành"],
            ['name' => "Khác"],
        ];
        foreach ($Grade as $Grade) {
            Grade::create($Grade);
        }

         // Thêm dữ liệu bảng Salary
         $Salary = [            
            ['name' => "Tất cả mức lương"],
            ['name' => "Lương thỏa thuận"],
            ['name' => "1-3 triệu"],
            ['name' => "3-5 triệu"],
            ['name' => "5-7 triệu"],
            ['name' => "7-10 triệu"],
            ['name' => "10-12 triệu"],
            ['name' => "12-15 triệu"],
            ['name' => "15-20 triệu"],
            ['name' => "20-25 triệu"],
            ['name' => "25-30 triệu"],
            ['name' => "Trên 30 triệu"]
        ];
        foreach ($Salary as $Salary) {
            Salary::create($Salary);
        }

         // Thêm dữ liệu bảng Experience
         $Experience = [            
            ['name' => "Chưa có"],
            ['name' => "Mới ra trường"],
            ['name' => "Dưới 1 năm"],
            ['name' => "1 năm"],
            ['name' => "2 năm"],
            ['name' => "3 năm"],
            ['name' => "4 năm"],
            ['name' => "5 năm"],
            ['name' => "Trên 10 năm"],
            ['name' => "Không yêu cầu kinh nghiệm"],
        ];
        foreach ($Experience as $Experience) {
            Experience::create($Experience);
        }

        // Thêm dữ liệu bảng Degree
        $Degree = [            
            ['name' => "Không yêu cầu"],
            ['name' => "Lao động phổ thông"],
            ['name' => "Chứng chỉ"],
            ['name' => "Trung học"],
            ['name' => "Trung cấp"],
            ['name' => "Cao đẳng"],
            ['name' => "Đại học"],
            ['name' => "Cao học"],
        ];
        foreach ($Degree as $Degree) {
            Degree::create($Degree);
        }

        // Thêm dữ liệu bảng Career
        $Career = [            
            ['name' => "Bán hàng"],
            ['name' => "Bảo vệ"],
            ['name' => "Phiên dịch - Ngoại ngữ"],
            ['name' => "Biên tập - Báo chí - Truyền hình"],
            ['name' => "Bảo hiểm"],
            ['name' => "Công chức - Viên chức"],
            ['name' => "Chức khoán"],
            ['name' => "Công nghệ cao"],
            ['name' => "Công nghiệp"],
            ['name' => "Cơ khí - Chế tạo"],
            ['name' => "Dệt may - Giầy da"],
            ['name' => "Dịch vụ"],
            ['name' => "Dụ lịch"],
            ['name' => "Đầu tư"],
            ['name' => "Điện tử viễn thông"],
            ['name' => "Điện - Điện tử - Điện lạnh"],
            ['name' => "Freelance"],
            ['name' => "Giao hàng"],
            ['name' => "Giáo dục - Đào tạo"],
            ['name' => "Games"],
            ['name' => "IT phần cứng/ Mạng"],
            ['name' => "IT phần Mềm"],
            ['name' => "In ấn - Xuất bản"],
            ['name' => "Kiến trúc - Thiết kế nội thất"],
            ['name' => "Khách sạn - Nhà hàng"],
            ['name' => "Luật - Pháp lý"],
            ['name' => "Làm đẹp - Thể lực - Spa"],
            ['name' => "Marketing - PR"],
            ['name' => "Thiết kế đồ họa"],
            ['name' => "Thiết kế Web"],
            ['name' => "Thời trang"],
            ['name' => "Thực phẩm - đồ uống"],
            ['name' => "Hàng hải"],
            ['name' => "Hàng không"],
            ['name' => "Hành chính - Văn phòng"],
            ['name' => "Xuất khẩu lao động"],
            ['name' => "Vận tải"],
            ['name' => "Xây dựng"],
        ];
        foreach ($Career as $Career) {
            Career::create($Career);
        }

        // Thêm dữ liệu bảng Career
        $City = [            
            ['id' => "01", 'name' => 'Thành phố Hà Nội','type'=>'Thành phố Trung ương'],
            ['id' => "02", 'name' => 'Tỉnh Hà Giang','type'=>'Tỉnh'],
            ['id' => "03", 'name' => 'Tỉnh Cao Bằng','type'=>'Tỉnh'],
            ['id' => "04", 'name' => 'Tỉnh Bắc Kạn','type'=>'Tỉnh'],
            ['id' => "05", 'name' => 'Tỉnh Tuyên Quang','type'=>'Tỉnh'],
            ['id' => "06", 'name' => 'Tỉnh Lào Cai','type'=>'Tỉnh'],
            ['id' => "07", 'name' => 'Tỉnh Điện Biên','type'=>'Tỉnh'],
            ['id' => "08", 'name' => 'Tỉnh Lai Châu','type'=>'Tỉnh'],
            ['id' => "09", 'name' => 'Tỉnh Sơn La','type'=>'Tỉnh'],
            ['id' => "10", 'name' => 'Tỉnh Yên Bái','type'=>'Tỉnh'],
            ['id' => "12", 'name' => 'Tỉnh Hoà Bình','type'=>'Tỉnh'],
            ['id' => "13", 'name' => 'Tỉnh Thái Nguyên','type'=>'Tỉnh'],
            ['id' => "14", 'name' => 'Tỉnh Lạng Sơn','type'=>'Tỉnh'],
            ['id' => "15", 'name' => 'Tỉnh Quảng Ninh','type'=>'Tỉnh'],
            ['id' => "16", 'name' => 'Tỉnh Bắc Giang','type'=>'Tỉnh'],
            ['id' => "17", 'name' => 'Tỉnh Phú Thọ','type'=>'Tỉnh'],
            ['id' => "18", 'name' => 'Tỉnh Vĩnh Phúc','type'=>'Tỉnh'],
            ['id' => "19", 'name' => 'Tỉnh Bắc Ninh','type'=>'Tỉnh'],
            ['id' => "20", 'name' => 'Tỉnh Hải Dương','type'=>'Tỉnh'],
            ['id' => "21", 'name' => 'Thành phố Hải Phòng','type'=>'Thành phố Trung ương'],
            ['id' => "22", 'name' => 'Tỉnh Hưng Yên','type'=>'Tỉnh'],
            ['id' => "23", 'name' => 'Tỉnh Thái Bình','type'=>'Tỉnh'],
            ['id' => "24", 'name' => 'Tỉnh Hà Nam','type'=>'Tỉnh'],
            ['id' => "25", 'name' => 'Tỉnh Nam Định','type'=>'Tỉnh'],
            ['id' => "26", 'name' => 'Tỉnh Ninh Bình','type'=>'Tỉnh'],
            ['id' => "27", 'name' => 'Tỉnh Thanh Hóa','type'=>'Tỉnh'],
            ['id' => "28", 'name' => 'Tỉnh Nghệ An','type'=>'Tỉnh'],
            ['id' => "29", 'name' => 'Tỉnh Hà Tĩnh','type'=>'Tỉnh'],
            ['id' => "30", 'name' => 'Tỉnh Quảng Bình','type'=>'Tỉnh'],
            ['id' => "31", 'name' => 'Tỉnh Quảng Trị','type'=>'Tỉnh'],
            ['id' => "32", 'name' => 'Tỉnh Thừa Thiên Huế','type'=>'Tỉnh'],
            ['id' => "33", 'name' => 'Thành phố Đà Nẵng','type'=>'Thành phố Trung ương'],
            ['id' => "34", 'name' => 'Tỉnh Quảng Nam','type'=>'Tỉnh'],
            ['id' => "35", 'name' => 'Tỉnh Quảng Ngãi','type'=>'Tỉnh'],
            ['id' => "36", 'name' => 'Tỉnh Bình Định','type'=>'Tỉnh'],
            ['id' => "37", 'name' => 'Tỉnh Phú Yên','type'=>'Tỉnh'],
            ['id' => "38", 'name' => 'Tỉnh Khánh Hòa','type'=>'Tỉnh'],
            ['id' => "39", 'name' => 'Tỉnh Ninh Thuận','type'=>'Tỉnh'],
            ['id' => "40", 'name' => 'Tỉnh Bình Thuận','type'=>'Tỉnh'],
            ['id' => "41", 'name' => 'Tỉnh Kon Tum','type'=>'Tỉnh'],
            ['id' => "42", 'name' => 'Tỉnh Gia Lai','type'=>'Tỉnh'],
            ['id' => "43", 'name' => 'Tỉnh Đắk Lắk','type'=>'Tỉnh'],
            ['id' => "44", 'name' => 'Tỉnh Đắk Nông','type'=>'Tỉnh'],
            ['id' => "45", 'name' => 'Tỉnh Lâm Đồng','type'=>'Tỉnh'],
            ['id' => "46", 'name' => 'Tỉnh Bình Phước','type'=>'Tỉnh'],
            ['id' => "47", 'name' => 'Tỉnh Tây Ninh','type'=>'Tỉnh'],
            ['id' => "48", 'name' => 'Tỉnh Bình Dương','type'=>'Tỉnh'],
            ['id' => "49", 'name' => 'Tỉnh Đồng Nai','type'=>'Tỉnh'],
            ['id' => "50", 'name' => 'Tỉnh Bà Rịa - Vũng Tàu','type'=>'Tỉnh'],
            ['id' => "51", 'name' => 'Thành phố Hồ Chí Minh','type'=>'Thành phố Trung ương'],
            ['id' => "52", 'name' => 'Tỉnh Long An','type'=>'Tỉnh'],
            ['id' => "53", 'name' => 'Tỉnh Tiền Giang','type'=>'Tỉnh'],
            ['id' => "54", 'name' => 'Tỉnh Bến Tre','type'=>'Tỉnh'],
            ['id' => "55", 'name' => 'Tỉnh Trà Vinh','type'=>'Tỉnh'],
            ['id' => "56", 'name' => 'Tỉnh Vĩnh Long','type'=>'Tỉnh'],
            ['id' => "57", 'name' => 'Tỉnh Đồng Tháp','type'=>'Tỉnh'],
            ['id' => "58", 'name' => 'Tỉnh An Giang','type'=>'Tỉnh'],
            ['id' => "59", 'name' => 'Tỉnh Kiên Giang','type'=>'Tỉnh'],
            ['id' => "60", 'name' => 'Thành phố Cần Thơ','type'=>'Thành phố Trung ương'],
            ['id' => "61", 'name' => 'Tỉnh Hậu Giang','type'=>'Tỉnh'],
            ['id' => "62", 'name' => 'Tỉnh Sóc Trăng','type'=>'Tỉnh'],
            ['id' => "63", 'name' => 'Tỉnh Bạc Liêu','type'=>'Tỉnh'],
            ['id' => "64", 'name' => 'Tỉnh Cà Mau','type'=>'Tỉnh'],
        ];
        foreach ($City as $City) {
            City::create($City);
        }

        $Admin = [            
            [
                'name' => "Dũng Admin",
                'email' => "admin@gmail.com",
                'password' => '$2y$10$KBqTqSANnzLpLQnb6PHNou4GBvOSO5fvHwc3fISLL0KGewZdvhkR6',
                'phone' => '0328050520',
                'address' => '34D, Đường số 12, Gò vấp',
                'city' => 51,
                'status' => 1
            ],
        ];
        foreach ($Admin as $Admin) {
            Admin::create($Admin);
        }


        factory(App\JobSeeker::class,20)->create();
        factory(App\Employer::class,20)->create();
        factory(App\Models\Company::class,20)->create();
        factory(App\Models\Job::class,100)->create();
    }
}
