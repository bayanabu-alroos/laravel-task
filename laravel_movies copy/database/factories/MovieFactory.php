<?php

namespace Database\Factories;

use App\Models\Movie;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\odel>
 */
class MovieFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {

        $movies = [
            [
                  "movie_name" => "Avatar",
                  "movie_description" => "A paraplegic marine dispatched to the moon Pandora on a unique mission becomes torn between following his orders and protecting the world he feels is his home.",
                  "movie_gener" => "Action, Adventure, Fantasy",
                  "movie_img" => "https://images-na.ssl-images-amazon.com/images/M/MV5BMjEyOTYyMzUxNl5BMl5BanBnXkFtZTcwNTg0MTUzNA@@._V1_SX1500_CR0,0,1500,999_AL_.jpg"
               ],
            [
                     "movie_name" => "I Am Legend",
                     "movie_description" => "Years after a plague kills most of humanity and transforms the rest into monsters, the sole survivor in New York City struggles valiantly to find a cure.",
                     "movie_gener" => "Drama, Horror, Sci-Fi",
                     "movie_img" => "https://images-na.ssl-images-amazon.com/images/M/MV5BMTI0NTI4NjE3NV5BMl5BanBnXkFtZTYwMDA0Nzc4._V1_.jpg"
                  ],
            [
                        "movie_name" => "300",
                        "movie_description" => "King Leonidas of Sparta and a force of 300 men fight the Persians at Thermopylae in 480 B.C.",
                        "movie_gener" => "Action, Drama, Fantasy",
                        "movie_img" => "https://images-na.ssl-images-amazon.com/images/M/MV5BMTMwNTg5MzMwMV5BMl5BanBnXkFtZTcwMzA2NTIyMw@@._V1_SX1777_CR0,0,1777,937_AL_.jpg"
                     ],
            [
                           "movie_name" => "The Avengers",
                           "movie_description" => "Earth's mightiest heroes must come together and learn to fight as a team if they are to stop the mischievous Loki and his alien army from enslaving humanity.",
                           "movie_gener" => "Action, Sci-Fi, Thriller",
                           "movie_img" => "https://images-na.ssl-images-amazon.com/images/M/MV5BMTA0NjY0NzE4OTReQTJeQWpwZ15BbWU3MDczODg2Nzc@._V1_SX1777_CR0,0,1777,999_AL_.jpg"
                        ],
            [
                              "movie_name" => "The Wolf of Wall Street",
                              "movie_description" => "Based on the true story of Jordan Belfort, from his rise to a wealthy stock-broker living the high life to his fall involving crime, corruption and the federal government.",
                              "movie_gener" => "Biography, Comedy, Crime",
                              "movie_img" => "https://images-na.ssl-images-amazon.com/images/M/MV5BNDIwMDIxNzk3Ml5BMl5BanBnXkFtZTgwMTg0MzQ4MDE@._V1_SX1500_CR0,0,1500,999_AL_.jpg"
                           ],
            [
                                 "movie_name" => "Interstellar",
                                 "movie_description" => "A team of explorers travel through a wormhole in space in an attempt to ensure humanity's survival.",
                                 "movie_gener" => "Adventure, Drama, Sci-Fi",
                                 "movie_img" => "https://images-na.ssl-images-amazon.com/images/M/MV5BMjA3NTEwOTMxMV5BMl5BanBnXkFtZTgwMjMyODgxMzE@._V1_SX1500_CR0,0,1500,999_AL_.jpg"
                              ],
            [
                                    "movie_name" => "Game of Thrones",
                                    "movie_description" => "While a civil war brews between several noble families in Westeros, the children of the former rulers of the land attempt to rise up to power. Meanwhile a forgotten race, bent on destruction, plans to return after thousands of years in the North.",
                                    "movie_gener" => "Adventure, Drama, Fantasy",
                                    "movie_img" => "https://images-na.ssl-images-amazon.com/images/M/MV5BNDc1MGUyNzItNWRkOC00MjM1LWJjNjMtZTZlYWIxMGRmYzVlXkEyXkFqcGdeQXVyMzU3MDEyNjk@._V1_SX1777_CR0,0,1777,999_AL_.jpg"
                                 ],
            [
                                       "movie_name" => "Vikings",
                                       "movie_description" => "The world of the Vikings is brought to life through the journey of Ragnar Lothbrok, the first Viking to emerge from Norse legend and onto the pages of history - a man on the edge of myth.",
                                       "movie_gener" => "Action, Drama, History",
                                       "movie_img" => "https://images-na.ssl-images-amazon.com/images/M/MV5BMjM5MTM1ODUxNV5BMl5BanBnXkFtZTgwNTAzOTI2ODE@._V1_.jpg"
                                    ],
            [
                                          "movie_name" => "Gotham",
                                          "movie_description" => "The story behind Detective James Gordon's rise to prominence in Gotham City in the years before Batman's arrival.",
                                          "movie_gener" => "Action, Crime, Drama",
                                          "movie_img" => "https://images-na.ssl-images-amazon.com/images/M/MV5BNDI3ODYyODY4OV5BMl5BanBnXkFtZTgwNjE5NDMwMDI@._V1_SY1000_SX1500_AL_.jpg"
                                       ],

            [
                                                "movie_name" => "Narcos",
                                                "movie_description" => "A chronicled look at the criminal exploits of Colombian drug lord Pablo Escobar.",
                                                "movie_gener" => "Biography, Crime, Drama",
                                                "movie_img" => "https://images-na.ssl-images-amazon.com/images/M/MV5BMTk2MDMzMTc0MF5BMl5BanBnXkFtZTgwMTAyMzA1OTE@._V1_SX1500_CR0,0,1500,999_AL_.jpg"
                                             ],
            [
                                                   "movie_name" => "Breaking Bad",
                                                   "movie_description" => "A high school chemistry teacher diagnosed with inoperable lung cancer turns to manufacturing and selling methamphetamine in order to secure his family's financial future.",
                                                   "movie_gener" => "Crime, Drama, Thriller",
                                                   "movie_img" => "https://images-na.ssl-images-amazon.com/images/M/MV5BMTgyMzI5NDc5Nl5BMl5BanBnXkFtZTgwMjM0MTI2MDE@._V1_SY1000_CR0,0,1498,1000_AL_.jpg"
                                                ],
            [
                                                      "movie_name" => "Doctor Strange",
                                                      "movie_description" => "After his career is destroyed, a brilliant but arrogant and conceited surgeon gets a new lease on life when a sorcerer takes him under her wing and trains him to defend the world against evil.",
                                                      "movie_gener" => "Action, Adventure, Fantasy",
                                                      "movie_img" => "https://images-na.ssl-images-amazon.com/images/M/MV5BMjM3ODc1ODI5Ml5BMl5BanBnXkFtZTgwODMzMDY3OTE@._V1_.jpg"
                                                   ],
            [
                                                         "movie_name" => "Rogue One: A Star Wars Story",
                                                         "movie_description" => "The Rebellion makes a risky move to steal the plans to the Death Star, setting up the epic saga to follow.",
                                                         "movie_gener" => "Action, Adventure, Sci-Fi",
                                                         "movie_img" => "https://images-na.ssl-images-amazon.com/images/M/MV5BMjE3MzA4Nzk3NV5BMl5BanBnXkFtZTgwNjAxMTc1ODE@._V1_SX1777_CR0,0,1777,744_AL_.jpg"
                                                      ],
            [
                                                            "movie_name" => "Assassin's Creed",
                                                            "movie_description" => "When Callum Lynch explores the memories of his ancestor Aguilar and gains the skills of a Master Assassin, he discovers he is a descendant of the secret Assassins society.",
                                                            "movie_gener" => "Action, Adventure, Fantasy",
                                                            "movie_img" => "https://images-na.ssl-images-amazon.com/images/M/MV5BN2EyYzgyOWEtNTY2NS00NjRjLWJiNDYtMWViMjg5MWZjYjgzXkEyXkFqcGdeQXVyNjUwNzk3NDc@._V1_.jpg"
                                                         ],
            [
                                                               "movie_name" => "Luke Cage",
                                                               "movie_description" => "Given superstrength and durability by a sabotaged experiment, a wrongly accused man escapes prison to become a superhero for hire.",
                                                               "movie_gener" => "Action, Crime, Drama",
                                                               "movie_img" => "https://images-na.ssl-images-amazon.com/images/M/MV5BMjMxNjc1NjI0NV5BMl5BanBnXkFtZTgwNzA0NzY0ODE@._V1_SY1000_CR0,0,1497,1000_AL_.jpg"
                                                            ]
         ];

         foreach ($movies as $key => $value) {
            Movie::create($value);
         }

    }
}
