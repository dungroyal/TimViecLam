<?php

use Faker\Generator as Faker;
use Illuminate\Support\Str;
use Buihuycuong\Vnfaker\VNFaker;


$factory->define(App\JobSeeker::class, function (Faker $faker) {
    return [
        'name'=> $faker->name,
        'email'=> $faker->companyEmail,
        'password'=> '$2y$10$KBqTqSANnzLpLQnb6PHNou4GBvOSO5fvHwc3fISLL0KGewZdvhkR6', //Mật khẩu: 12345678
        'phone'=>$faker->e164PhoneNumber
    ];
});

$factory->define(App\Employer::class, function (Faker $faker) {
    return [
        'email'=> $faker->companyEmail,
        'email_verified_at'=> now(),
        'password'=> '$2y$10$KBqTqSANnzLpLQnb6PHNou4GBvOSO5fvHwc3fISLL0KGewZdvhkR6', //Mật khẩu: 12345678
    ];
});

$factory->define(App\Models\Company::class, function (Faker $faker) {
    return [
        'employer_id' =>App\Employer::all()->random()->id,
        'name_company'=>vnfaker()->company(),
        'personnel_size'=>vnfaker()->numberBetween($min = 1, $max = 4),
        'career'=>vnfaker()->numberBetween($min = 0, $max = 30),
        'phone'=>vnfaker()->mobilephone($numbers = 10),
        'address'=>"Đang cập nhật",
        'city'=>51,
        'description'=>"Đang cập nhật",
        'website'=>$faker->domainName,
        'name_contact'=>vnfaker()->fullname($word = 3),
        'phone_contact'=>vnfaker()->mobilephone($numbers = 10),
        'email_contact'=>vnfaker()->email(),
        'address_contact'=>"Đang cập nhật",
        'status'=>1,
    ];
});

$factory->define(App\Models\Job::class, function (Faker $faker) {
    $id = App\Employer::all()->random()->id;
    return [
        'job_code' =>vnfaker()->generateOrderNo($length = 6, $prefix = null, $postfix = null, $numbers = false, $letters = true, $uppercase = true),
        'company_id' => $id,
        'employer_id' => $id,
        'name_job' =>$name_job=$faker->sentence($nbWords = 10, $variableNbWords = true),
        'type_job_id' =>vnfaker()->numberBetween($min = 1, $max = 4),
        'amount' =>vnfaker()->numberBetween($min = 1, $max = 4),
        'career_id' =>vnfaker()->numberBetween($min = 1, $max = 38),
        'grade_id' =>vnfaker()->numberBetween($min = 1, $max = 7),
        'salary_id' =>vnfaker()->numberBetween($min = 3, $max = 12),
        'degree_id' =>vnfaker()->numberBetween($min = 2, $max = 8),
        'experience_id' =>vnfaker()->numberBetween($min = 2, $max = 10),
        'address' =>"34D, Đường số 12, Phường 11, Quận Gò Vấp",
        'city' =>vnfaker()->numberBetween($min = 1, $max = 64),
        'description' =>"Việc nhẹ lương cao, ứng tuyển là nhận ngay",
        'job_requirements' =>
            "- Thực hiện các công việc khác được giao
            - Có khả năng làm việc độc lập và khả năng làm việc theo nhóm.
            - Năng động, sáng tạo.
            - Chịu được áp lực cao trong công việc, sẵn sàng làm thêm giờ nếu cần.
            - Có tư duy làm việc logic, làm việc theo nhóm.
            - Kỷ luật, chăm chỉ, có trách nhiệm trong công việc.
            - Có khả năng đọc và nghiên cứu tài liệu tiếng Anh tốt.",
        'sex_requirements' =>vnfaker()->numberBetween($min =0, $max = 2),
        'profile_request' =>"
            - Đơn xin việc làm (nói rõ quá trình công tác và lý do nghỉ việc)
            - Sơ yếu lý lịch.
            - Bản sao hộ khẩu, CMND và các bằng cấp có liên quan.
            - Giấy khám sức khỏe.",
        'benefits' =>
            "- Mức lương: thoả thuận theo năng lực và kinh nghiệm
            - Thời gian: 8h30 -18h từ thứ 2 - sáng thứ 7
            - Được nghỉ lễ tết theo lịch và thưởng lễ tết, thưởng sinh nhật, hiếu hỷ theo chính sách công ty.
            - Tham gia BHXH, BHYT, BHTN và Bảo hiểm tự nguyện theo quy định nhà nước
            - Nghỉ phép 12 ngày/năm
            - Được tổ chức tham quan, du lịch, teambuilding 1 năm/lần.
            - Nhiều cơ hội thăng tiến lên các vị trí cấp cao
            - Các chế độ phúc lợi khác",      
        'name_contact'=>vnfaker()->fullname($word = 3),
        'phone_contact'=>vnfaker()->mobilephone($numbers = 10),
        'address_contact'=>"Đang cập nhật",
        'email_contact'=>vnfaker()->email(),
        'deadline' =>"2020-12-31",
        'slug' =>str_slug($name_job),
        'status' =>vnfaker()->numberBetween($min = 0, $max = 3),
    ];
});