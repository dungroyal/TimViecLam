<?php

use Illuminate\Database\Seeder;
use App\JobSeeker;
use App\Employer;
use App\Models\TypeJob;
use App\Models\Career;
use App\Models\Grade;
use App\Models\Salary;
use App\Models\Experience;
use App\Models\Degree;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
    	factory('App\JobSeeker',15)->create();
        // factory('App\Employer',15)->create();

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
    }
}
