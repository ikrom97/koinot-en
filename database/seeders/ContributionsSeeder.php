<?php

namespace Database\Seeders;

use App\Models\Contribution;
use Illuminate\Database\Seeder;

class ContributionsSeeder extends Seeder
{
  /**
   * Run the database seeds.
   *
   * @return void
   */
  public function run()
  {
    $contributions = array(
      array('id' => '7', 'locale' => 'ru', 'title' => 'Taking Care of Our Citizens\' Health', 'slug' => 'zabota-o-zdorove-nashih-grazhdan', 'content' => '<p>The coronavirus pandemic in Tajikistan was not only a test for all people, but also a period of universal solidarity. The period of self-isolation and quarantine was a challenge for the pharmaceutical industry. "SALOMAT" Internet pharmacy worked actively to provide residents of the republic with affordable medicines, which were delivered without leaving home. "SALOMAT" Internet pharmacy is staffed by highly qualified employees who approached their work responsibly, by keeping all safety measures and timely delivery of the necessary medicines.<br></p>', 'created_at' => '2022-10-03 09:05:06', 'updated_at' => '2022-10-16 12:12:41', 'date' => '2020-04-01T00:00:06'),
      array('id' => '8', 'locale' => 'ru', 'title' => 'The reader has gone online!', 'slug' => 'chitatel-ushel-v-onlayn', 'content' => '<p>Life around the world in 2020 has been changed by a new coronavirus, COVID-19.</p><p>Restrictive measures have been introduced in different countries and different industries.&nbsp;</p><p><br></p><p>The first institutions to be affected were those who had mass visits by citizens. Libraries were not an exception.</p><p>Effective "remote working" has become for us not an isolated phenomenon, not a trend, but a new reality. Our project "KHIRAD" contains selectronic versions of specialized&nbsp; a works by Tajik authors on management, marketing, finance. All literature is presented to reader only in Tajik language.</p><p>Users have access to translated into Tajik language books of the world\'s leading experts in the field of business, published by world-renowned publishers.</p><p><br></p><p>Despite the quarantine, "KHIRAD"s Project creative approach helps get the publications into the hands of readers.</p>', 'created_at' => '2022-10-03 09:46:14', 'updated_at' => '2022-10-16 12:11:57', 'date' => '2020-04-01T14:42'),
      array('id' => '10', 'locale' => 'ru', 'title' => 'General sponsor of the Tajikistan Chess Federation', 'slug' => 'generalnyy-sponsor-federacii-shahmat-tadzhikistana', 'content' => '<p>Promoting the principles of corporate social responsibility, we focus on improving the living standards of the people in our country. Active participation in and support of projects that promote a healthy lifestyle and intellectual activity is the underlying concept of the sponsorship activities of <b>"KOINOTI NAV"</b>. Making the world a better place and bringing the maximum benefit to society is the main postulate of our team\'s philosophy.&nbsp;</p><p><br></p><p>So, we are the general sponsor of Tajikistan Chess Federation. As the vice president of the chess federation noted, in recent years our country has taken significant steps to develop this sport in the country. Back in August 2017, Tajik President Emomali Rahmon stressed the need to introduce chess lessons in the country\'s schools. After that, there were published textbooks in Tajik language called "Chess Basics," which contain the rules and a set of components of the game.</p><p><br></p><p><b>We will continue to actively develop this sport in our country!</b></p><p><br></p><p>&nbsp;"In chess you can only become a great master when you realize your own mistakes and weaknesses. Just like in life."&nbsp;&nbsp;</p><p><br></p><p>Alexander Alekhine</p>', 'created_at' => '2022-10-13 11:45:15', 'updated_at' => '2022-10-16 12:04:38', 'date' => '2022-10-13T16:44'),
      array('id' => '11', 'locale' => 'ru', 'title' => 'CJSC "KOINOTI NAV" partner of the Football Federation of Tajikistan', 'slug' => 'sponsor-federacii-futbola-tadzhikistana', 'content' => '<p><span style="font-size: 1em;">We are glad that "KOINOTI NAV" is one of the permanent partners of FFT. We are confident in a long-term cooperation, the purpose of which is to increase the army of fans in the number 1 sport. </span></p><p><span style="font-size: 1em;"><br></span></p><p><span style="font-size: 1em;">We involve young people and promote a healthy sustainable lifestyle - these two aspects are very important to us.</span><br></p><pre><span class="Y2IQFc"> We are proud that we can contribute to the development of football in Tajikistan!</span></pre>', 'created_at' => '2022-10-13 12:56:15', 'updated_at' => '2022-10-16 12:15:28', 'date' => '2022-10-13T17:47'),
      array('id' => '12', 'locale' => 'ru', 'title' => '"YOVAR" is the title sponsor of FLT', 'slug' => 'evar-titulnyy-sponsor-flt', 'content' => '<p><span style="font-size: 1em;">The title sponsor of the FLT was the "Yovar" shopping complex in Dushanbe, where a unique service and discounts will be prepared for all fans in the near future, which they can use.</span><br></p>', 'created_at' => '2022-10-15 10:27:24', 'updated_at' => '2022-10-16 12:09:52', 'date' => '2022-10-15T10:27:24'),
      array('id' => '13', 'locale' => 'ru', 'title' => 'Free assistance to the Ministry of Health of the Republic of Tajikistan', 'slug' => 'free-assistance-to-the-ministry-of-health-of-the-republic-of-tajikistan', 'content' => '<p><span style="font-size: 1em;">We took a proactive part in the fight against the disease, and in order to support society in a difficult situation and mitigate the adverse consequences, we provided all possible gratuitous assistance to the Ministry of Health and Social Protection of the Population of the Republic of Tajikistan. KOINOTI NAV CJSC donated medical equipment, medicines, basic consumables (needles, syringes, masks, gloves, etc.) for the treatment of patients with COVID-19.</span><br></p><pre><span class="Y2IQFc" lang="en">We do our best to help reduce the spread of the virus and its consequences.</span></pre>', 'created_at' => '2022-10-16 12:18:14', 'updated_at' => '2022-10-16 12:18:14', 'date' => '2020-10-15T17:17')
    );

    foreach ($contributions as $contribution) {
      Contribution::create([
        'id' => $contribution['id'],
        'title' => $contribution['title'],
        'slug' => $contribution['slug'],
        'content' => $contribution['content'],
        'date' => $contribution['date'],
      ]);
    }
  }
}
