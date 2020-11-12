<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Episode;
use Faker\Generator as Faker;

$factory->define(Episode::class, function (Faker $faker) {
    return [
        'show_id'=>1,
        'season'=>$faker->numberBetween($min = 1, $max = 10),
        'number'=>$faker->numberBetween($min = 1, $max = 10),
        'link'=>"https://a6-yi4-s-jynw.vidstream.to/watch/7cf48a1253b01994yepUHgJ9eKDwbHbRm.b1bLbRYudQYxjBVxKFubBQ__.bHJwdGdIT0FKVGpIeDl1RmxWd0FJKzhHcFVNRVVsU3UvZFlWZFNxNTNlVzJlMU90QmhQRU4rbS92MUgxSDlZcGJwTXYwL0tVZU9MT1B2TE04NkkrZzJWc3FKVWM2OUUvTm1HRkgrNEZnZGZydFpRTWh5YUcyYzUraUQrOXc4Qi9zQXVMUkc3NWxsd0xjdTlrZlo1K3pwVmlIWWovVW44bnY2cHhvc2lyUCtoWlkzWERMS2xUakhZL21EY0FsU2xQTjV2VUJPYUUzd1dCV0w5ZFpCT3lzQTcwZEV1Sy9tc0ZIcTEyOEJ5V3hWZVRxUmZyTFdZZ3BuQmxzd1VQekxhdSs1enFTQlpMeWpNaGpyVk92QmtSYmI0Tk1iTnVoVGhuMzU0NmZ6a1N1VFl4NWZxaTFZaTRjY1lrb0o1TVhlVDJzYUZZbFVMSGxDdG5hTDdTSDNIQzQ3NzJrUXRIaTJBSmZjV21qRS85VHBhK1orQWluSVdXMUgrUWV0Q3hlZmNGclFJZmlpQWp0Nm1NS1BQT1orYUEzcGttNXFDNkhMUy8_/[EgyBest].The.Good.Lord.Bird.S01E04.WEB-DL.720p.x264.mp4"
    ];
});
