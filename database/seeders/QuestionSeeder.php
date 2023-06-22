<?php

namespace Database\Seeders;

use App\Models\Questions;
use Illuminate\Database\Seeder;

class QuestionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $questions = [
            [
                'question' => 'In Tennis, what is the score when the receiver wins the next point after deuce?',
                'option_a' => '30-40',
                'option_b' => 'Advantage out',
                'option_c' => '40-30',
                'option_d' => 'Advantage in',
                'correct_option' => 'B',
            ],
            [
                'question' => 'Which of the given amendments made it compulsory for the president to consent to the constitutional Amendment bills?',
                'option_a' => '27th',
                'option_b' => '29th',
                'option_c' => '24th',
                'option_d' => '22th',
                'correct_option' => 'C',
            ],
            [
                'question' => 'Right to emergency medical aid is a',
                'option_a' => 'Legal Right',
                'option_b' => 'Illegal Right',
                'option_c' => 'Constitutional Right',
                'option_d' => 'Fundamental Right',
                'correct_option' => 'D',
            ],
            [
                'question' => 'Which of the given devices is used for counting blood cells?',
                'option_a' => 'Hmelethometer',
                'option_b' => 'Spyscometer',
                'option_c' => 'Hemocytometer',
                'option_d' => 'Hamosytometer',
                'correct_option' => 'C',
            ],
            [
                'question' => 'Which of the given compounds is used to make fireproof clothing?',
                'option_a' => 'Aluminum chloride',
                'option_b' => 'Aluminum Sulphate',
                'option_c' => 'Magnesium Chloride',
                'option_d' => 'Magnesium Sulphate',
                'correct_option' => 'B',
            ],
            [
                'question' => 'The driving force of an ecosystem is',
                'option_a' => 'Carbon Mono oxide',
                'option_b' => 'Biogas',
                'option_c' => 'Solar Energy',
                'option_d' => 'Carbon dioxide ',
                'correct_option' => 'C',
            ],
            [
                'question' => 'Which of the given cities is located on the bank of river Ganga?',
                'option_a' => 'Patna',
                'option_b' => 'Gwalior',
                'option_c' => 'Bhopal',
                'option_d' => 'Mathura  ',
                'correct_option' => 'A',
            ],
            [
                'question' => 'When the metal reacts with dilute acid, which gas is formed?',
                'option_a' => 'Carbon Dioxide',
                'option_b' => 'Helium',
                'option_c' => 'Neon',
                'option_d' => 'Hydrogen  ',
                'correct_option' => 'D',
            ],
            [
                'question' => 'What is the name of the lower layer of the Earth three concentric layers?',
                'option_a' => 'SAIL',
                'option_b' => 'SIMA',
                'option_c' => 'SAMA',
                'option_d' => 'SIAL',
                'correct_option' => 'B',
            ],
            [
                'question' => 'Which of the given vitamins is responsible for blood clotting?',
                'option_a' => 'Vitamin A',
                'option_b' => 'Vitamin B',
                'option_c' => 'Vitamin K',
                'option_d' => 'Vitamin D',
                'correct_option' => 'C',
            ],
            [
                'question' => 'Which of the given Mughal emperors had introduced the Mansabdari system?',
                'option_a' => 'Shahjahan',
                'option_b' => 'Babar',
                'option_c' => 'Akbar',
                'option_d' => 'Aurangzeb',
                'correct_option' => 'B',
            ],
            [
                'question' => 'Which of the given industries uses limestone as a raw material?',
                'option_a' => 'Paper',
                'option_b' => 'Cement',
                'option_c' => 'Textile',
                'option_d' => 'Leather',
                'correct_option' => 'B',
            ],
            [
                'question' => 'How many goals are added in Sustainable Developments Goals adopted by the UN?',
                'option_a' => '18',
                'option_b' => '17',
                'option_c' => '20',
                'option_d' => '21',
                'correct_option' => 'B',
            ],
        ];
        Questions::truncate();
        Questions::insert($questions);
        
    }
}
