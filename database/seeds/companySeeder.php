<?php
use Illuminate\Database\Seeder;

/**
 * Class CompanySeeder
 *
 * 会社を定義
 */
class companySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        \DB::table('company')->truncate();
        \DB::table('company')->insert($this->getInsertArray());
        \DB::table('company')->update([
            'created_at' => date_create()->format('Ymd'),
            'updated_at' => date_create()->format('Ymd'),
        ]);
    }

    private function getInsertArray()
    {
        $array = [
            [
                'id' => 1,
                'name' => '株式会社サテライトテクノロジーズ',
                'prefecture_id' => '10',
                'address' => '東京都港区浜松町2-7-18第1小森谷ビル4階',
            ],
            [
                'id' => 2,
                'name' => '株式会社サテライトテクノロジーズ3',
                'prefecture_id' => '11',
                'address' => '東京都港区浜松町2-7-18第1小森谷ビル5階',
            ],

        ];
        return $array;
    }
}
