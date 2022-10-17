<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Category;
use App\Models\Post;
class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
         

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        User::create([
            'name' => 'Sandhika Galih',
            'username' => 'sandhikagalih',
            'email' => 'jonathanputra134@gmail.com',
            'password' => bcrypt('password')
        ]);

        
        // User::create([
        //     'name' => 'Jonathan Putra',
        //     'email' => 'JonathanPutra@gmail.com',
        //     'password' => bcrypt('12345')
        // ]);
        User::factory(3)->create();

        Category::create([
            'name' => 'Web programming',
            'slug' => 'web-programming'
        ]);
           
        Category::create([
            'name' => 'Personal',
            'slug' => 'personal'
           ]);

              Category::create([
            'name' => 'Web Design',
            'slug' => 'web-design'
           ]);
        
        Post::factory(20)->create();
        // Post::create([
        //     'title' => 'Judul Pertama',
        //     'slug' => 'judul-pertama',
        //     'excerpt' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Error aliquid sint nostrum nemo eaque id esse velit dolore commodi,',

        //     'body' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Error aliquid sint nostrum nemo eaque id esse velit dolore commodi, dignissimos mollitia nesciunt veniam aperiam doloremque vel necessitatibus optio ipsa explicabo. Eos est cum rerum quidem, voluptas voluptatem necessitatibus corporis molestiae ad? Sed impedit, laborum, perspiciatis dolorum doloremque incidunt, earum commodi at in quisquam voluptatibus aliquid. Beatae autem, corrupti debitis praesentium, ullam architecto voluptates cum ut maiores earum numquam aliquid, velit molestiae blanditiis perspiciatis eos deleniti. Officiis, quas suscipit reprehenderit accusantium laborum eum totam cumque quia recusandae impedit voluptatibus dicta architecto aliquid officia incidunt quo? Incidunt debitis ad quisquam id necessitatibus.',

        //     'category_id' => 1,
        //     'user_id' => 1

        // ]);

        // Post::create([
        //     'title' => 'Judul Ke Dua',
        //     'slug' => 'judul-ke-dua',
        //     'excerpt' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Error aliquid sint nostrum nemo eaque id esse velit dolore commodi,',
        //     'body' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Error aliquid sint nostrum nemo eaque id esse velit dolore commodi, dignissimos mollitia nesciunt veniam aperiam doloremque vel necessitatibus optio ipsa explicabo. Eos est cum rerum quidem, voluptas voluptatem necessitatibus corporis molestiae ad? Sed impedit, laborum, perspiciatis dolorum doloremque incidunt, earum commodi at in quisquam voluptatibus aliquid. Beatae autem, corrupti debitis praesentium, ullam architecto voluptates cum ut maiores earum numquam aliquid, velit molestiae blanditiis perspiciatis eos deleniti. Officiis, quas suscipit reprehenderit accusantium laborum eum totam cumque quia recusandae impedit voluptatibus dicta architecto aliquid officia incidunt quo? Incidunt debitis ad quisquam id necessitatibus.',

        //     'category_id' => 1,
        //     'user_id' => 1

        // ]);

        //       Post::create([
        //     'title' => 'Judul Ke Tiga',
        //     'slug' => 'judul-ke-tiga',
        //       'excerpt' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Error aliquid sint nostrum nemo eaque id esse velit dolore commodi,',
        //     'body' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Error aliquid sint nostrum nemo eaque id esse velit dolore commodi, dignissimos mollitia nesciunt veniam aperiam doloremque vel necessitatibus optio ipsa explicabo. Eos est cum rerum quidem, voluptas voluptatem necessitatibus corporis molestiae ad? Sed impedit, laborum, perspiciatis dolorum doloremque incidunt, earum commodi at in quisquam voluptatibus aliquid. Beatae autem, corrupti debitis praesentium, ullam architecto voluptates cum ut maiores earum numquam aliquid, velit molestiae blanditiis perspiciatis eos deleniti. Officiis, quas suscipit reprehenderit accusantium laborum eum totam cumque quia recusandae impedit voluptatibus dicta architecto aliquid officia incidunt quo? Incidunt debitis ad quisquam id necessitatibus.',
        //     'category_id' => 2,
        //     'user_id' => 2

        // ]);
    }
}
