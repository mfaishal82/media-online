<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class news extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [
                // 'id' => 1,
                'title' => 'Ukraine says Russian cyberattack hits state registries but no data lost',
                'content' => "Dec 20 (Reuters) - A Russian cyberattack on Ukraine's justice ministry registries caused a shutdown of online services for marriages and other matters, but no data appears to have been leaked or stolen, the Ukrainian government said on Friday.
Russia took several months to prepare the cyberattack, which was the largest to target Ukraine's state registries in recent times, Deputy Prime Minister Olha Stefanishyna, who is also justice minister, told reporters at a briefing in Kyiv. \n
Online services to register matters like marriages, cars, births or a change of residence in Ukraine were suspended, the government service platform said.
The attack sought to 'instil panic among Ukrainian citizens and those abroad,' Stefanishyna said.
The Ukrainian security service's cyber department said their main line of investigation was that a hacker group affiliated with Russian military intelligence (GRU) was behind the attack. There was no comment from Russia. \n
'Data leakage is not confirmed as of now... At this stage, all registries are suspended for security purposes,' Stefanishyna said.
All the data would restored, she added. It could take up to two weeks to restore basic services, she said.
As of Friday afternoon, the ministry's website said it was undergoing 'technical maintenance'.
Both Russia and Ukraine have been hit by cyberattacks on their infrastructure during their 33-month-long war. Ukraine's biggest mobile network operator was attacked last December.",
                'img' => '/images/cyber.png',
                // 'isHeadline' => 'true',
                'isPopular' => 'true',
                'category_id' => 1,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                // 'id' => 2,
                'title' => "Japan's antitrust watchdog to find Google violated law in search case, Nikkei reports",
                'content' => "Dec 22 (Reuters) - Japan's competition watchdog is expected to find Google (GOOGL.O), opens new tab guilty of violating the country's antitrust law, Nikkei Asia reported on Sunday, citing sources. \n
The Japan Fair Trade Commission(JFTC) will soon issue a cease and desist order asking Google to halt its monopolistic practices, the report added. \n
Google did not immediately respond to request for comment while the JFTC could not be reached for comment. \n
The Japanese competition watchdog started investigating Google for a possible breach of antimonopoly laws in web search services last October, following similar steps by authorities in Europe and other major economies. \n
Chrome is the world's most widely used web browser and is a pillar of Google's business, providing user information that helps the company target ads more effectively and profitably. \n
Last month, the U.S. Department of Justice argued ahead of a judge that Alphabet owned Google must divest its Chrome browser and should not be allowed to re-enter the browser market for five years in an effort to end Google's search monopoly.",
                'img' => '/images/google.png',
                // 'isHeadline' => 'false',
                'isPopular' => 'true',
                'category_id' => 4,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                // 'id' => 3,
                'title' => "Honda and Nissan consider mutual production of vehicles, Kyodo reports",
                'content' => "TOKYO, Dec 21 (Reuters) - Honda (7267.T), opens new tab and Nissan (7201.T), opens new tab are considering producing vehicles in one another's factories as part of their plan to deepen ties and potentially merge, Japan's Kyodo news agency said on Saturday. \n
Honda will consider supplying hybrid vehicles to Nissan as part of the plan, the report said, without citing the source of the information.
A merger of Honda, Japan's second-largest car company, and Nissan, its third-largest, would create the world's third-largest auto group by vehicle sales, behind Toyota (7203.T), opens new tab and Volkswagen (VOWG_p.DE), opens new tab, making 7.4 million vehicles a year. \n
The two automakers forged a strategic partnership in March to cooperate in electric vehicle development, but Nissan has faced financial and strategic troubles in recent months. \n
As announced, Honda, 'Nissan and Mitsubishi Motors are in the process of bringing together our strengths and exploring potential forms of cooperation, but nothing has been decided yet', a Honda spokesperson said, when asked about the report. \n
Nissan declined to comment, saying the details of the report were not based on a company announcement. Nissan is the top shareholder in Mitsubishi Motors (7211.T), opens new tab. \n
Kyodo said Honda could use Nissan's car factory in Britain, as it now only has factories for engines and motorcycles in Europe.
The move comes amid concerns over how president-elect Donald Trump's policies may shake up manufacturing with his promises of protectionist trade policies, the report said",
                'img' => '/images/nissan.png',
                // 'isHeadline' => 'false',
                'isPopular' => 'true',
                'category_id' => 3,
                'created_at' => now(),
                'updated_at' => now()
            ]
        ];

        DB::table('news')->insert($data);
    }
}
