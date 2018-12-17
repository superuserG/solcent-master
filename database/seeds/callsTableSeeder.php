<?php

use Illuminate\Database\Seeder;
use App\ReportCall;

class callsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      ReportCall::create([
        'Team'=>'Solution Center',
        'months'=>'January',
        'year'=>'2018',
        'presentedCall'=>'23602',
        'handledCall'=>'15269',
        'abandonedCall'=>'8333'
      ]);

      ReportCall::create([
        'Team'=>'Solution Center',
        'months'=>'February',
        'year'=>'2018',
        'presentedCall'=>'15052',
        'handledCall'=>'12512',
        'abandonedCall'=>'2540'
      ]);

      ReportCall::create([
        'Team'=>'Solution Center',
        'months'=>'March',
        'year'=>'2018',
        'presentedCall'=>'19423',
        'handledCall'=>'15674',
        'abandonedCall'=>'3748'
      ]);

      ReportCall::create([
        'Team'=>'Solution Center',
        'months'=>'April',
        'year'=>'2018',
        'presentedCall'=>'18564',
        'handledCall'=>'14767',
        'abandonedCall'=>'3797'
      ]);

      ReportCall::create([
        'Team'=>'Solution Center',
        'months'=>'May',
        'year'=>'2018',
        'presentedCall'=>'22177',
        'handledCall'=>'15816',
        'abandonedCall'=>'6361'
      ]);

      ReportCall::create([
        'Team'=>'Solution Center',
        'months'=>'June',
        'year'=>'2018',
        'presentedCall'=>'17041',
        'handledCall'=>'9178',
        'abandonedCall'=>'7833'
      ]);

      ReportCall::create([
        'Team'=>'Solution Center',
        'months'=>'July',
        'year'=>'2018',
        'presentedCall'=>'34365',
        'handledCall'=>'15791',
        'abandonedCall'=>'18523'
      ]);

      ReportCall::create([
        'Team'=>'Solution Center',
        'months'=>'August',
        'year'=>'2018',
        'presentedCall'=>'26064',
        'handledCall'=>'14423',
        'abandonedCall'=>'11602'
      ]);

      ReportCall::create([
        'Team'=>'Solution Center',
        'months'=>'September',
        'year'=>'2018',
        'presentedCall'=>'36512',
        'handledCall'=>'12812',
        'abandonedCall'=>'23647'
      ]);

      ReportCall::create([
        'Team'=>'Solution Center',
        'months'=>'October',
        'year'=>'2018',
        'presentedCall'=>'37788',
        'handledCall'=>'17373',
        'abandonedCall'=>'20342'
      ]);

      ReportCall::create([
        'Team'=>'Solution Center',
        'months'=>'November',
        'year'=>'2018',
        'presentedCall'=>'22089',
        'handledCall'=>'15559',
        'abandonedCall'=>'6488'
      ]);
    }
}
