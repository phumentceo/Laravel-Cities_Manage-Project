<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DistrictSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $districts = [
            [
                "name" => "ស្រុកកណ្តាលស្ទឹង",
                "created_at" => now(),
                "updated_at" => now(),
            ],
            [
                "name" => "ស្រុកកៀនស្វាយ",
                "created_at" => now(),
                "updated_at" => now(),
            ],
            [
                "name" => "ស្រុកខ្សាច់កណ្តាល",
                "created_at" => now(),
                "updated_at" => now(),
            ],
            [
                "name" => "ស្រុកកោះធំ",
                "created_at" => now(),
                "updated_at" => now(),
            ],
            [
                "name" => "ស្រុកកោះធំ",
                "created_at" => now(),
                "updated_at" => now(),
            ],
            [
                "name" => "ស្រុកលើកដែក",
                "created_at" => now(),
                "updated_at" => now(),
            ],
            [
                "name" => "ស្រុកល្វាឯម",
                "created_at" => now(),
                "updated_at" => now(),
            ],
            [
                "name" => "ស្រុកមុខកំពូល",
                "created_at" => now(),
                "updated_at" => now(),
            ],
            [
                "name" => "ស្រុកអង្គស្នួល",
                "created_at" => now(),
                "updated_at" => now(),
            ],
            [
                "name" => "ស្រុកពញា",
                "created_at" => now(),
                "updated_at" => now(),
            ],
            [
                "name" => "ស្រុកស្អាង",
                "created_at" => now(),
                "updated_at" => now(),
            ],
            [
                "name" => "ក្រុងតាខ្មៅ",
                "created_at" => now(),
                "updated_at" => now(),
            ],
            [
                "name" => "ក្រុងកំពង់ចាម",
                "created_at" => now(),
                "updated_at" => now(),
            ],
            [
                "name" => "ស្រុកបាធាយ",
                "created_at" => now(),
                "updated_at" => now(),
            ],
            [
                "name" => "ស្រុកចំការលើ",
                "created_at" => now(),
                "updated_at" => now(),
            ],
            [
                "name" => "ស្រុកជើងព្រៃ",
                "created_at" => now(),
                "updated_at" => now(),
            ],
            [
                "name" => "ស្រុកកំពង់សៀម",
                "created_at" => now(),
                "updated_at" => now(),
            ],
            [
                "name" => "ស្រុកកំពង់សៀម",
                "created_at" => now(),
                "updated_at" => now(),
            ],
            [
                "name" => "ស្រុកកងមាស",
                "created_at" => now(),
                "updated_at" => now(),
            ],
            [
                "name" => "ស្រុកកោះសូទិន",
                "created_at" => now(),
                "updated_at" => now(),
            ],
            [
                "name" => "ស្រុកព្រៃឈរ",
                "created_at" => now(),
                "updated_at" => now(),
            ],
            [
                "name" => "ស្រុកស្រីសន្ធរ",
                "created_at" => now(),
                "updated_at" => now(),
            ],
            [
                "name" => "ស្រុកស្ទឹងត្រង់",
                "created_at" => now(),
                "updated_at" => now(),
            ],
            [
                "name" => "ស្រុកបារាយណ៍",
                "created_at" => now(),
                "updated_at" => now(),
            ],
            [
                "name" => "ស្រុកកំពង់ស្វាយ",
                "created_at" => now(),
                "updated_at" => now(),
            ],
            [
                "name" => "ក្រុងស្ទឹងសែន",
                "created_at" => now(),
                "updated_at" => now(),
            ],
            [
                "name" => "ស្រុកប្រាសាទបាល័័ង្ក",
                "created_at" => now(),
                "updated_at" => now(),
            ],
            [
                "name" => "ស្រុកប្រាសាទសំបូរ",
                "created_at" => now(),
                "updated_at" => now(),
            ],
            [
                "name" => "ស្រុកសណ្តាន់",
                "created_at" => now(),
                "updated_at" => now(),
            ],
            [
                "name" => "ស្រុកសន្ទុក",
                "created_at" => now(),
                "updated_at" => now(),
            ],
            [
                "name" => "ស្រុកស្ទោង",
                "created_at" => now(),
                "updated_at" => now(),
            ],
            [
                "name" => "ស្រុកបាភ្នំ",
                "created_at" => now(),
                "updated_at" => now(),
            ],
            [
                "name" => "ស្រុកកំចាយមារ",
                "created_at" => now(),
                "updated_at" => now(),
            ],
            [
                "name" => "ស្រុកកញ្ច្រៀច",
                "created_at" => now(),
                "updated_at" => now(),
            ],
            [
                "name" => "ស្រុកមេសាង",
                "created_at" => now(),
                "updated_at" => now(),
            ],
            [
                "name" => "ស្រុកពាមជរ",
                "created_at" => now(),
                "updated_at" => now(),
            ],
            [
                "name" => "ស្រុកកំពង់ត្របែក",
                "created_at" => now(),
                "updated_at" => now(),
            ],
            [
                "name" => "ស្រុកពាមរ",
                "created_at" => now(),
                "updated_at" => now(),
            ],
            [
                "name" => "ស្រុកពារាំង",
                "created_at" => now(),
                "updated_at" => now(),
            ],
            [
                "name" => "ស្រុកព្រះស្តេច",
                "created_at" => now(),
                "updated_at" => now(),
            ],
            [
                "name" => "ស្រុកពោធិវៀង",
                "created_at" => now(),
                "updated_at" => now(),
            ],
            [
                "name" => "ស្រុកស៊ីធរកណ្តាល",
                "created_at" => now(),
                "updated_at" => now(),
            ],
            [
                "name" => "ស្រុកស្វាយអន្ទរ",
                "created_at" => now(),
                "updated_at" => now(),
            ],
            [
                "name" => "ស្រុកចន្ទ្រា",
                "created_at" => now(),
                "updated_at" => now(),
            ],
            [
                "name" => "ស្រុកកំពង់រោទិ៍",
                "created_at" => now(),
                "updated_at" => now(),
            ],
            [
                "name" => "ស្រុករំដួល",
                "created_at" => now(),
                "updated_at" => now(),
            ],
            [
                "name" => "ស្រុករមាសហែង",
                "created_at" => now(),
                "updated_at" => now(),
            ],
            [
                "name" => "ស្រុកស្វាយជ្រំ",
                "created_at" => now(),
                "updated_at" => now(),
            ],
            [
                "name" => "ស្រុកស្វាយទាប",
                "created_at" => now(),
                "updated_at" => now(),
            ],
            [
                "name" => "ក្រុងស្វាយរៀង",
                "created_at" => now(),
                "updated_at" => now(),
            ],
            [
                "name" => "ក្រុងបាវិត",
                "created_at" => now(),
                "updated_at" => now(),
            ],
            [
                "name" => "ស្រុកអូររាំងឪ",
                "created_at" => now(),
                "updated_at" => now(),
            ],
            [
                "name" => "ស្រុកមេមត់",
                "created_at" => now(),
                "updated_at" => now(),
            ],
            [
                "name" => "ស្រុកពញាក្រែក",
                "created_at" => now(),
                "updated_at" => now(),
            ],
            [
                "name" => "ស្រុកត្បូងឃ្មុំ",
                "created_at" => now(),
                "updated_at" => now(),
            ],
            [
                "name" => "ស្រុកដំបែ",
                "created_at" => now(),
                "updated_at" => now(),
            ],
            [
                "name" => "ស្រុកក្រូចឆ្មា",
                "created_at" => now(),
                "updated_at" => now(),
            ],
            [
                "name" => "ក្រុងសួង",
                "created_at" => now(),
                "updated_at" => now(),
            ],
            [
                "name" => "ស្រុកសេសាន",
                "created_at" => now(),
                "updated_at" => now(),
            ],
            [
                "name" => "ស្រុកសៀមបូក",
                "created_at" => now(),
                "updated_at" => now(),
            ],
            [
                "name" => "ស្រុកសៀមប៉ាង",
                "created_at" => now(),
                "updated_at" => now(),
            ],
            [
                "name" => "ក្រុងស្ទឹងត្រែង",
                "created_at" => now(),
                "updated_at" => now(),
            ],
            [
                "name" => "ស្រុកថាឡាបរិវ៉ាត់",
                "created_at" => now(),
                "updated_at" => now(),
            ],
            [
                "name" => "ស្រុកបុរីអូស្វាយសែនជ័យ",
                "created_at" => now(),
                "updated_at" => now(),
            ],
            [
                "name" => "ស្រុកបានលុង",
                "created_at" => now(),
                "updated_at" => now(),
            ],
            [
                "name" => "ស្រុកបរកែវ",
                "created_at" => now(),
                "updated_at" => now(),
            ],
            [
                "name" => "ស្រុកកូនមុំ",
                "created_at" => now(),
                "updated_at" => now(),
            ],
            [
                "name" => "ស្រុកលំផាត់",
                "created_at" => now(),
                "updated_at" => now(),
            ],
            [
                "name" => "ស្រុកអូរជុំ",
                "created_at" => now(),
                "updated_at" => now(),
            ],
            [
                "name" => "ស្រុកអូរយ៉ាដាវ",
                "created_at" => now(),
                "updated_at" => now(),
            ],
            [
                "name" => "ស្រុកតាវែង",
                "created_at" => now(),
                "updated_at" => now(),
            ],
            [
                "name" => "ស្រុកវើនសៃ",
                "created_at" => now(),
                "updated_at" => now(),
            ],
            [
                "name" => "ស្រុកកែវសីមា",
                "created_at" => now(),
                "updated_at" => now(),
            ],
            [
                "name" => "ស្រុកកោះញែក",
                "created_at" => now(),
                "updated_at" => now(),
            ],
            [
                "name" => "ស្រុកអូររាំង",
                "created_at" => now(),
                "updated_at" => now(),
            ],
            [
                "name" => "ស្រុកពេជ្រាដា",
                "created_at" => now(),
                "updated_at" => now(),
            ],
            [
                "name" => "ស្រុកសែនមនោរម្យ",
                "created_at" => now(),
                "updated_at" => now(),
            ],
            [
                "name" => "ស្រុកអង្គរបុរី",
                "created_at" => now(),
                "updated_at" => now(),
            ],
            [
                "name" => "ស្រុកបាទី",
                "created_at" => now(),
                "updated_at" => now(),
            ],
            [
                "name" => "ស្រុកបុរីជលសារ",
                "created_at" => now(),
                "updated_at" => now(),
            ],
            [
                "name" => "ស្រុកគិរីវង់",
                "created_at" => now(),
                "updated_at" => now(),
            ],
            [
                "name" => "ស្រុកកោះអណ្តែត",
                "created_at" => now(),
                "updated_at" => now(),
            ],
            [
                "name" => "ស្រុកព្រៃកប្បាស",
                "created_at" => now(),
                "updated_at" => now(),
            ],
            [
                "name" => "ស្រុកសំរោង",
                "created_at" => now(),
                "updated_at" => now(),
            ],
            [
                "name" => "ស្រុកដូនកែវ",
                "created_at" => now(),
                "updated_at" => now(),
            ],
            [
                "name" => "ស្រុកត្រាំកក់",
                "created_at" => now(),
                "updated_at" => now(),
            ],
            [
                "name" => "ស្រុកទ្រាំង",
                "created_at" => now(),
                "updated_at" => now(),
            ],
            [
                "name" => "ស្រុកបរសេដ្ឋ",
                "created_at" => now(),
                "updated_at" => now(),
            ],
            [
                "name" => "ស្រុកច្បាមន",
                "created_at" => now(),
                "updated_at" => now(),
            ],
            [
                "name" => "ស្រុកគងពិសី",
                "created_at" => now(),
                "updated_at" => now(),
            ],
            [
                "name" => "ស្រុកឳរ៉ាល់",
                "created_at" => now(),
                "updated_at" => now(),
            ],
            [
                "name" => "ស្រុកភ្នុំស្រួច",
                "created_at" => now(),
                "updated_at" => now(),
            ],
            [
                "name" => "ស្រុកសំរោងទង",
                "created_at" => now(),
                "updated_at" => now(),
            ],
            [
                "name" => "ស្រុកថ្ពង",
                "created_at" => now(),
                "updated_at" => now(),
            ],
            [
                "name" => "ស្រុកឧដុង្គមានជ័យ",
                "created_at" => now(),
                "updated_at" => now(),
            ],
            [
                "name" => "ស្រុកសាមគ្គីមុនីជ័យ",
                "created_at" => now(),
                "updated_at" => now(),
            ],
            [
                "name" => "ស្រុកបាណន់",
                "created_at" => now(),
                "updated_at" => now(),
            ],
            [
                "name" => "ស្រុកថ្មគោល",
                "created_at" => now(),
                "updated_at" => now(),
            ],
            [
                "name" => "ក្រុងបាត់ដំបង",
                "created_at" => now(),
                "updated_at" => now(),
            ],
            [
                "name" => "ស្រុកបវេស",
                "created_at" => now(),
                "updated_at" => now(),
            ],
            [
                "name" => "ស្រុកមោងឫស្សី",
                "created_at" => now(),
                "updated_at" => now(),
            ],
            [
                "name" => "ស្រុករតនមណ្ឌល",
                "created_at" => now(),
                "updated_at" => now(),
            ],
            [
                "name" => "ស្រុកសង្កែ",
                "created_at" => now(),
                "updated_at" => now(),
            ],
            [
                "name" => "ស្រុកសំឡូត",
                "created_at" => now(),
                "updated_at" => now(),
            ],
            [
                "name" => "ស្រុកសំពៅលូន",
                "created_at" => now(),
                "updated_at" => now(),
            ],
            [
                "name" => "ស្រុកភ្នំព្រឹក",
                "created_at" => now(),
                "updated_at" => now(),
            ],
            [
                "name" => "ស្រុកកំរៀង",
                "created_at" => now(),
                "updated_at" => now(),
            ],
            [
                "name" => "ស្រុកគាស់ក្រឡ",
                "created_at" => now(),
                "updated_at" => now(),
            ],
            [
                "name" => "ស្រុករុក្ខគិរី",
                "created_at" => now(),
                "updated_at" => now(),
            ],
            [
                "name" => "ស្រុកអង្គរជ័យ",
                "created_at" => now(),
                "updated_at" => now(),
            ],
            [
                "name" => "ស្រុកបន្ទាយមាស",
                "created_at" => now(),
                "updated_at" => now(),
            ],
            [
                "name" => "ស្រុកឈូក",
                "created_at" => now(),
                "updated_at" => now(),
            ],
            [
                "name" => "ស្រុកជុំគិរី",
                "created_at" => now(),
                "updated_at" => now(),
            ],
            [
                "name" => "ស្រុកដងទង",
                "created_at" => now(),
                "updated_at" => now(),
            ],
            [
                "name" => "ស្រុកកំពង់ត្រាច",
                "created_at" => now(),
                "updated_at" => now(),
            ],
            [
                "name" => "ស្រុកទឹកឈូ",
                "created_at" => now(),
                "updated_at" => now(),
            ],
            [
                "name" => "ក្រុងកំពត",
                "created_at" => now(),
                "updated_at" => now(),
            ],
            [
                "name" => "ក្រុងបូគោ",
                "created_at" => now(),
                "updated_at" => now(),
            ],
            [
                "name" => "ក្រុងព្រះសីហនុ",
                "created_at" => now(),
                "updated_at" => now(),
            ],
            [
                "name" => "ស្រុកព្រៃនប់",
                "created_at" => now(),
                "updated_at" => now(),
            ],
            [
                "name" => "ស្រុកស្ទឹងហាវ",
                "created_at" => now(),
                "updated_at" => now(),
            ],
            [
                "name" => "ស្រុកកំពង់សីលា",
                "created_at" => now(),
                "updated_at" => now(),
            ],
            [
                "name" => "ស្រុកកោះរ៉ុង",
                "created_at" => now(),
                "updated_at" => now(),
            ],
            [
                "name" => "ក្រុងកែប",
                "created_at" => now(),
                "updated_at" => now(),
            ],
            [
                "name" => "ស្រុកដំណាក់ចង្អើរ",
                "created_at" => now(),
                "updated_at" => now(),
            ],
            [
                "name" => "ស្រុកបទុមសាគរ",
                "created_at" => now(),
                "updated_at" => now(),
            ],
            [
                "name" => "ស្រុកគិរីសាគរ",
                "created_at" => now(),
                "updated_at" => now(),
            ],
            [
                "name" => "ស្រុកកោះកុង",
                "created_at" => now(),
                "updated_at" => now(),
            ],
            [
                "name" => "ស្រុកស្មាច់មានជ័យ",
                "created_at" => now(),
                "updated_at" => now(),
            ],
            [
                "name" => "ស្រុកមណ្ឌលសីមា",
                "created_at" => now(),
                "updated_at" => now(),
            ],
            [
                "name" => "ស្រុកស្រែអំបិល",
                "created_at" => now(),
                "updated_at" => now(),
            ],
            [
                "name" => "ស្រុកថ្មបាំង",
                "created_at" => now(),
                "updated_at" => now(),
            ],
            [
                "name" => "ស្រុកកំពង់សិលា",
                "created_at" => now(),
                "updated_at" => now(),
            ],
            [
                "name" => "ក្រុងប៉ៃលិន",
                "created_at" => now(),
                "updated_at" => now(),
            ],
            [
                "name" => "ស្រុកសាលាក្រៅ",
                "created_at" => now(),
                "updated_at" => now(),
            ],
            [
                "name" => "ស្រុកឆ្លូង",
                "created_at" => now(),
                "updated_at" => now(),
            ],
            [
                "name" => "ក្រុងក្រចេះ",
                "created_at" => now(),
                "updated_at" => now(),
            ],
            [
                "name" => "ស្រុកព្រែកប្រសព្វ",
                "created_at" => now(),
                "updated_at" => now(),
            ],
            [
                "name" => "ស្រុកសំបូរ",
                "created_at" => now(),
                "updated_at" => now(),
            ],
            [
                "name" => "ស្រុកស្នួល",
                "created_at" => now(),
                "updated_at" => now(),
            ],
            [
                "name" => "ស្រុកចិត្របុរី",
                "created_at" => now(),
                "updated_at" => now(),
            ],
            [
                "name" => "ស្រុកបរិបូណ៍",
                "created_at" => now(),
                "updated_at" => now(),
            ],
            [
                "name" => "ស្រុកជលគិរី",
                "created_at" => now(),
                "updated_at" => now(),
            ],
            [
                "name" => "ក្រុងកំពង់ឆ្នាំង",
                "created_at" => now(),
                "updated_at" => now(),
            ],
            [
                "name" => "ស្រុកកំពង់លែង",
                "created_at" => now(),
                "updated_at" => now(),
            ],
            [
                "name" => "ស្រុកកំពង់ត្រឡាច",
                "created_at" => now(),
                "updated_at" => now(),
            ],
            [
                "name" => "ស្រុករលាប្អៀរ",
                "created_at" => now(),
                "updated_at" => now(),
            ],
            [
                "name" => "ស្រុកសាមគ្គីមានជ័យ",
                "created_at" => now(),
                "updated_at" => now(),
            ],
            [
                "name" => "ស្រុកទឹកផុស",
                "created_at" => now(),
                "updated_at" => now(),
            ],
            [
                "name" => "ស្រុកបាកាន",
                "created_at" => now(),
                "updated_at" => now(),
            ],
            [
                "name" => "ស្រុកកណ្តៀង",
                "created_at" => now(),
                "updated_at" => now(),
            ],
            [
                "name" => "ស្រុកក្រគរ",
                "created_at" => now(),
                "updated_at" => now(),
            ],
            [
                "name" => "ស្រុកភ្នំក្រវាញ",
                "created_at" => now(),
                "updated_at" => now(),
            ],
            [
                "name" => "ក្រុងពោធិ៍សាត់",
                "created_at" => now(),
                "updated_at" => now(),
            ],
            [
                "name" => "ស្រុកវាលវែង",
                "created_at" => now(),
                "updated_at" => now(),
            ],
            [
                "name" => "ស្រុកតាលោសែនជ័យ",
                "created_at" => now(),
                "updated_at" => now(),
            ],
            [
                "name" => "ស្រុកអង្គរជុំ",
                "created_at" => now(),
                "updated_at" => now(),
            ],
            [
                "name" => "ស្រុកអង្គរធំ",
                "created_at" => now(),
                "updated_at" => now(),
            ],
            [
                "name" => "ស្រុកបន្ទាយស្រី",
                "created_at" => now(),
                "updated_at" => now(),
            ],
            [
                "name" => "ស្រុកជីក្រែង",
                "created_at" => now(),
                "updated_at" => now(),
            ],
            [
                "name" => "ស្រុកក្រឡាញ់",
                "created_at" => now(),
                "updated_at" => now(),
            ],
            [
                "name" => "ស្រុកពូក",
                "created_at" => now(),
                "updated_at" => now(),
            ],
            [
                "name" => "ស្រុកប្រាសាទបាគង",
                "created_at" => now(),
                "updated_at" => now(),
            ],
            [
                "name" => "ក្រុងសៀមរាប",
                "created_at" => now(),
                "updated_at" => now(),
            ],
            [
                "name" => "ស្រុកសូទ្រនិគម",
                "created_at" => now(),
                "updated_at" => now(),
            ],
            [
                "name" => "ស្រុកស្រីស្នំ",
                "created_at" => now(),
                "updated_at" => now(),
            ],
            [
                "name" => "ស្រុកស្វាយលើ",
                "created_at" => now(),
                "updated_at" => now(),
            ],
            [
                "name" => "ស្រុកវ៉ារិន",
                "created_at" => now(),
                "updated_at" => now(),
            ],
            [
                "name" => "ស្រុកមង្គលបុរី",
                "created_at" => now(),
                "updated_at" => now(),
            ],
            [
                "name" => "ស្រុកភ្នំស្រុក",
                "created_at" => now(),
                "updated_at" => now(),
            ],
            [
                "name" => "ស្រុកព្រះនេត្រព្រះ",
                "created_at" => now(),
                "updated_at" => now(),
            ],
            [
                "name" => "ស្រុកអូរជ្រៅ",
                "created_at" => now(),
                "updated_at" => now(),
            ],
            [
                "name" => "ក្រុងសេរីសោភ័ណ",
                "created_at" => now(),
                "updated_at" => now(),
            ],
            [
                "name" => "ស្រុកថ្មពួក",
                "created_at" => now(),
                "updated_at" => now(),
            ],
            [
                "name" => "ស្រុកស្វាយចេក",
                "created_at" => now(),
                "updated_at" => now(),
            ],
            [
                "name" => "ស្រុកម៉ាឡៃ",
                "created_at" => now(),
                "updated_at" => now(),
            ],
            [
                "name" => "ក្រុងប៉ោយប៉ែត",
                "created_at" => now(),
                "updated_at" => now(),
            ],
            [
                "name" => "ក្រុងព្រះវិហារ",
                "created_at" => now(),
                "updated_at" => now(),
            ],
            [
                "name" => "ស្រុកជ័យសែន",
                "created_at" => now(),
                "updated_at" => now(),
            ],
            [
                "name" => "ស្រុកឆែប",
                "created_at" => now(),
                "updated_at" => now(),
            ],
            [
                "name" => "ស្រុកជាំកម្សាន្ត",
                "created_at" => now(),
                "updated_at" => now(),
            ],
            [
                "name" => "ស្រុកគូលែន",
                "created_at" => now(),
                "updated_at" => now(),
            ],
            [
                "name" => "ស្រុកវៀង",
                "created_at" => now(),
                "updated_at" => now(),
            ],
            [
                "name" => "ស្រុកសង្គមថ្មី",
                "created_at" => now(),
                "updated_at" => now(),
            ],
            [
                "name" => "ស្រុកត្បែងមានជ័យ",
                "created_at" => now(),
                "updated_at" => now(),
            ],
            [
                "name" => "ស្រុកអន្លង់វែង",
                "created_at" => now(),
                "updated_at" => now(),
            ],
            [
                "name" => "ស្រុកបន្ទាយអំពិល",
                "created_at" => now(),
                "updated_at" => now(),
            ],
            [
                "name" => "ស្រុកចុងកាល់",
                "created_at" => now(),
                "updated_at" => now(),
            ],
            [
                "name" => "ស្រុកសំរោង",
                "created_at" => now(),
                "updated_at" => now(),
            ],
            [
                "name" => "ស្រុកត្រពាំប្រាសាទ",
                "created_at" => now(),
                "updated_at" => now(),
            ],
            [
                "name" => "ទីក្រុងភ្នំពេញ",
                "created_at" => now(),
                "updated_at" => now(),
            ],
            [
                "name" => "ចំការមន",
                "created_at" => now(),
                "updated_at" => now(),
            ],
            [
                "name" => "ដូនពេញ",
                "created_at" => now(),
                "updated_at" => now(),
            ],
            [
                "name" => "៧មករា",
                "created_at" => now(),
                "updated_at" => now(),
            ],
            [
                "name" => "ទួលគោក",
                "created_at" => now(),
                "updated_at" => now(),
            ],
            [
                "name" => "ដង្កោ",
                "created_at" => now(),
                "updated_at" => now(),
            ],
            [
                "name" => "មានជ័យ",
                "created_at" => now(),
                "updated_at" => now(),
            ],
            [
                "name" => "ជ្រោយចង្វា",
                "created_at" => now(),
                "updated_at" => now(),
            ],
            [
                "name" => "ឫស្សីកែវ",
                "created_at" => now(),
                "updated_at" => now(),
            ],
            [
                "name" => "សែនសុខ",
                "created_at" => now(),
                "updated_at" => now(),
            ],
            [
                "name" => "ពោធិ៍សែនជ័យ",
                "created_at" => now(),
                "updated_at" => now(),
            ],
            [
                "name" => "ជ្រោយចង្វារ",
                "created_at" => now(),
                "updated_at" => now(),
            ],
            [
                "name" => "ព្រែកព្នៅ",
                "created_at" => now(),
                "updated_at" => now(),
            ],
            [
                "name" => "ច្បារអំពៅ",
                "created_at" => now(),
                "updated_at" => now(),
            ],
            [
                "name" => "បឹងកេងកង",
                "created_at" => now(),
                "updated_at" => now(),
            ],
            [
                "name" => "កំបូល",
                "created_at" => now(),
                "updated_at" => now(),
            ],
        
        ];

       DB::table('districts')->insert($districts);
    }
}
