<?php

use Illuminate\Database\Seeder;

class PhotolocationsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      $parking = new App\Photolocation;
      $parking->id_parking = 1;
      $parking->floor = 'G';
      $parking->canvas = 'font,1A - 10A,270,294|font,11A - 20A,693,299|rect,104,124,419,355,#0080ff,11|rect,559,125,406,356,#008000,11|';
      $parking->photo = '/storage/photoslocation/O8A6MAmvx2vPEqGweGKFP4wf71Om0juKnsgAKEp4.jpeg';
      $parking->save();

      $parking = new App\Photolocation;
      $parking->id_parking = 1;
      $parking->floor = '1';
      $parking->canvas = 'font,1B - 9B,470,123|font,13B - 15B,80,455|font,10B - 12B,889,451|rect,5,4,1075,198,#ff0000,14|pen,795,253,795,253,795,254,795,255,795,256,791,257,784,258,770,261,756,262,731,264,705,265,685,265,650,265,626,265,608,265,588,265,568,267,551,268,536,268,514,268,501,266,484,264,469,264,459,264,455,263,451,263,449,263,446,263,445,263,444,263,443,263,#008080,14|pen,402,242,402,242,402,243,402,244,402,247,402,254,402,268,402,287,402,309,403,328,408,357,413,390,419,433,424,455,429,477,432,487,433,496,434,503,435,511,435,512,436,514,436,515,436,516,436,517,436,519,436,521,436,523,436,525,436,528,436,532,436,535,435,537,435,539,435,541,435,543,435,544,435,546,435,547,435,548,435,550,435,551,435,552,435,554,435,555,435,556,435,557,435,559,435,560,435,561,435,562,435,563,435,565,435,566,435,568,435,569,#008080,14|rect,13,316,243,270,#0080c0,14|rect,843,304,243,281,#ff0080,14|pen,521,387,521,387,521,390,523,390,526,390,539,388,567,380,601,365,615,359,647,345,663,338,675,331,687,324,705,316,720,308,729,302,735,298,741,294,743,292,745,290,746,289,747,289,748,288,748,290,748,297,744,304,727,330,702,366,679,401,656,431,610,486,587,511,565,534,557,540,533,556,519,564,514,568,509,571,504,574,500,577,500,578,499,578,498,579,497,579,498,578,501,576,509,568,515,562,524,554,539,542,551,532,563,524,568,521,571,519,575,517,581,513,585,510,589,507,592,504,598,501,602,498,607,493,614,485,623,475,626,472,627,470,630,467,631,466,637,460,646,449,651,442,654,439,655,438,656,438,656,437,656,436,655,435,648,434,640,435,624,442,609,451,596,459,585,467,566,481,551,490,542,497,529,507,520,512,516,517,513,519,512,520,510,522,509,522,509,521,509,516,512,505,517,495,528,477,535,465,542,453,549,442,559,426,562,421,564,418,566,416,567,415,#8080ff,14|';
      $parking->photo = '/storage/photoslocation/6rOuMPQRI0YmQjjIJnUbSSd71hbTp0Tzp6VF9ZqK.png';
      $parking->save();

      $parking = new App\Photolocation;
      $parking->id_parking = 2;
      $parking->floor = '1';
      $parking->canvas = 'font,1A - 10A,270,294|font,11A - 20A,693,299|rect,104,124,419,355,#0080ff,11|rect,559,125,406,356,#008000,11|';
      $parking->photo = '/storage/photoslocation/O8A6MAmvx2vPEqGweGKFP4wf71Om0juKnsgAKEp4.jpeg';
      $parking->save();

      $parking = new App\Photolocation;
      $parking->id_parking = 3;
      $parking->floor = '1';
      $parking->canvas = 'font,1B - 9B,470,123|font,13B - 15B,80,455|font,10B - 12B,889,451|rect,5,4,1075,198,#ff0000,14|pen,795,253,795,253,795,254,795,255,795,256,791,257,784,258,770,261,756,262,731,264,705,265,685,265,650,265,626,265,608,265,588,265,568,267,551,268,536,268,514,268,501,266,484,264,469,264,459,264,455,263,451,263,449,263,446,263,445,263,444,263,443,263,#008080,14|pen,402,242,402,242,402,243,402,244,402,247,402,254,402,268,402,287,402,309,403,328,408,357,413,390,419,433,424,455,429,477,432,487,433,496,434,503,435,511,435,512,436,514,436,515,436,516,436,517,436,519,436,521,436,523,436,525,436,528,436,532,436,535,435,537,435,539,435,541,435,543,435,544,435,546,435,547,435,548,435,550,435,551,435,552,435,554,435,555,435,556,435,557,435,559,435,560,435,561,435,562,435,563,435,565,435,566,435,568,435,569,#008080,14|rect,13,316,243,270,#0080c0,14|rect,843,304,243,281,#ff0080,14|pen,521,387,521,387,521,390,523,390,526,390,539,388,567,380,601,365,615,359,647,345,663,338,675,331,687,324,705,316,720,308,729,302,735,298,741,294,743,292,745,290,746,289,747,289,748,288,748,290,748,297,744,304,727,330,702,366,679,401,656,431,610,486,587,511,565,534,557,540,533,556,519,564,514,568,509,571,504,574,500,577,500,578,499,578,498,579,497,579,498,578,501,576,509,568,515,562,524,554,539,542,551,532,563,524,568,521,571,519,575,517,581,513,585,510,589,507,592,504,598,501,602,498,607,493,614,485,623,475,626,472,627,470,630,467,631,466,637,460,646,449,651,442,654,439,655,438,656,438,656,437,656,436,655,435,648,434,640,435,624,442,609,451,596,459,585,467,566,481,551,490,542,497,529,507,520,512,516,517,513,519,512,520,510,522,509,522,509,521,509,516,512,505,517,495,528,477,535,465,542,453,549,442,559,426,562,421,564,418,566,416,567,415,#8080ff,14|';
      $parking->photo = '/storage/photoslocation/6rOuMPQRI0YmQjjIJnUbSSd71hbTp0Tzp6VF9ZqK.png';
      $parking->save();
    }
}
