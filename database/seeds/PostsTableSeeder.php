<?php
 
use Illuminate\Database\Seeder;
 
class PostsTableSeeder extends Seeder {
 
    public function run()
    {
        // Uncomment the below to wipe the table clean before populating
        DB::table('posts')->delete();
 
        $posts = array(
            [
                "id" => 1, 
                "title" => "Post 1", 
                "description" => "Donec consectetur ligula ac magna semper, vel tempor nisl ullamcorper. Integer vehicula in nibh in hendrerit. Nulla vestibulum lectus non lectus pulvinar, at pulvinar velit elementum. Fusce est sapien, vulputate sed diam id, sodales imperdiet nibh. Nunc tempor sem vel eros euismod, eget suscipit ipsum lobortis. Aliquam semper ex nibh, non mollis ligula sagittis non. Vestibulum ullamcorper nibh at eros luctus pretium. Pellentesque a risus consectetur, ultricies justo et, accumsan tortor. Phasellus imperdiet semper nunc, vitae sollicitudin sapien laoreet id. Nunc dictum, quam a auctor facilisis, turpis felis semper ante, at laoreet justo libero eu quam. Quisque id lacus a neque euismod condimentum. Phasellus ac dui fringilla nibh molestie mattis. Maecenas vulputate ligula vel sodales pellentesque.", 
                "body" => "Donec consectetur ligula ac magna semper, vel tempor nisl ullamcorper. Integer vehicula in nibh in hendrerit. Nulla vestibulum lectus non lectus pulvinar, at pulvinar velit elementum. Fusce est sapien, vulputate sed diam id, sodales imperdiet nibh. Nunc tempor sem vel eros euismod, eget suscipit ipsum lobortis. Aliquam semper ex nibh, non mollis ligula sagittis non. Vestibulum ullamcorper nibh at eros luctus pretium. Pellentesque a risus consectetur, ultricies justo et, accumsan tortor. Phasellus imperdiet semper nunc, vitae sollicitudin sapien laoreet id. Nunc dictum, quam a auctor facilisis, turpis felis semper ante, at laoreet justo libero eu quam. Quisque id lacus a neque euismod condimentum. Phasellus ac dui fringilla nibh molestie mattis. Maecenas vulputate ligula vel sodales pellentesque.<br /><br />Donec pretium vestibulum ipsum, non maximus lacus. Aenean libero sem, molestie eget tortor sit amet, ornare laoreet lacus. Duis eu ornare lacus. Mauris hendrerit, diam ut malesuada hendrerit, nibh leo accumsan orci, ac pulvinar mi ligula interdum odio. Ut suscipit aliquam neque quis suscipit. Nulla et maximus justo. Nulla pharetra lacus sit amet neque scelerisque, in interdum lacus volutpat. Vestibulum purus leo, consectetur ac bibendum id, vehicula vel sapien. Morbi accumsan ullamcorper sapien, vel dapibus dolor ullamcorper vel. Mauris mattis nibh eu diam semper, sed consectetur dui blandit. Suspendisse potenti. Quisque ligula risus, lacinia at nunc non, ullamcorper vehicula eros. Praesent a scelerisque leo, sed ornare quam.", 
                "slug" => "Post-1", 
                "user_id" => 1, 
                "created_at" => new DateTime, 
                "updated_at" => new DateTime
            ],

            [
                "id" => 2, 
                "title" => "Post 2", 
                "description" => "Donec consectetur ligula ac magna semper, vel tempor nisl ullamcorper. Integer vehicula in nibh in hendrerit. Nulla vestibulum lectus non lectus pulvinar, at pulvinar velit elementum. Fusce est sapien, vulputate sed diam id, sodales imperdiet nibh. Nunc tempor sem vel eros euismod, eget suscipit ipsum lobortis. Aliquam semper ex nibh, non mollis ligula sagittis non. Vestibulum ullamcorper nibh at eros luctus pretium. Pellentesque a risus consectetur, ultricies justo et, accumsan tortor. Phasellus imperdiet semper nunc, vitae sollicitudin sapien laoreet id. Nunc dictum, quam a auctor facilisis, turpis felis semper ante, at laoreet justo libero eu quam. Quisque id lacus a neque euismod condimentum. Phasellus ac dui fringilla nibh molestie mattis. Maecenas vulputate ligula vel sodales pellentesque.", 
                "body" => "Donec consectetur ligula ac magna semper, vel tempor nisl ullamcorper. Integer vehicula in nibh in hendrerit. Nulla vestibulum lectus non lectus pulvinar, at pulvinar velit elementum. Fusce est sapien, vulputate sed diam id, sodales imperdiet nibh. Nunc tempor sem vel eros euismod, eget suscipit ipsum lobortis. Aliquam semper ex nibh, non mollis ligula sagittis non. Vestibulum ullamcorper nibh at eros luctus pretium. Pellentesque a risus consectetur, ultricies justo et, accumsan tortor. Phasellus imperdiet semper nunc, vitae sollicitudin sapien laoreet id. Nunc dictum, quam a auctor facilisis, turpis felis semper ante, at laoreet justo libero eu quam. Quisque id lacus a neque euismod condimentum. Phasellus ac dui fringilla nibh molestie mattis. Maecenas vulputate ligula vel sodales pellentesque.<br /><br />Donec pretium vestibulum ipsum, non maximus lacus. Aenean libero sem, molestie eget tortor sit amet, ornare laoreet lacus. Duis eu ornare lacus. Mauris hendrerit, diam ut malesuada hendrerit, nibh leo accumsan orci, ac pulvinar mi ligula interdum odio. Ut suscipit aliquam neque quis suscipit. Nulla et maximus justo. Nulla pharetra lacus sit amet neque scelerisque, in interdum lacus volutpat. Vestibulum purus leo, consectetur ac bibendum id, vehicula vel sapien. Morbi accumsan ullamcorper sapien, vel dapibus dolor ullamcorper vel. Mauris mattis nibh eu diam semper, sed consectetur dui blandit. Suspendisse potenti. Quisque ligula risus, lacinia at nunc non, ullamcorper vehicula eros. Praesent a scelerisque leo, sed ornare quam.", 
                "slug" => "Post-2", 
                "user_id" => 1, 
                "created_at" => new DateTime, 
                "updated_at" => new DateTime
            ],

            [
                "id" => 3, 
                "title" => "Post 3", 
                "description" => "Donec consectetur ligula ac magna semper, vel tempor nisl ullamcorper. Integer vehicula in nibh in hendrerit. Nulla vestibulum lectus non lectus pulvinar, at pulvinar velit elementum. Fusce est sapien, vulputate sed diam id, sodales imperdiet nibh. Nunc tempor sem vel eros euismod, eget suscipit ipsum lobortis. Aliquam semper ex nibh, non mollis ligula sagittis non. Vestibulum ullamcorper nibh at eros luctus pretium. Pellentesque a risus consectetur, ultricies justo et, accumsan tortor. Phasellus imperdiet semper nunc, vitae sollicitudin sapien laoreet id. Nunc dictum, quam a auctor facilisis, turpis felis semper ante, at laoreet justo libero eu quam. Quisque id lacus a neque euismod condimentum. Phasellus ac dui fringilla nibh molestie mattis. Maecenas vulputate ligula vel sodales pellentesque.", 
                "body" => "Donec consectetur ligula ac magna semper, vel tempor nisl ullamcorper. Integer vehicula in nibh in hendrerit. Nulla vestibulum lectus non lectus pulvinar, at pulvinar velit elementum. Fusce est sapien, vulputate sed diam id, sodales imperdiet nibh. Nunc tempor sem vel eros euismod, eget suscipit ipsum lobortis. Aliquam semper ex nibh, non mollis ligula sagittis non. Vestibulum ullamcorper nibh at eros luctus pretium. Pellentesque a risus consectetur, ultricies justo et, accumsan tortor. Phasellus imperdiet semper nunc, vitae sollicitudin sapien laoreet id. Nunc dictum, quam a auctor facilisis, turpis felis semper ante, at laoreet justo libero eu quam. Quisque id lacus a neque euismod condimentum. Phasellus ac dui fringilla nibh molestie mattis. Maecenas vulputate ligula vel sodales pellentesque.<br /><br />Donec pretium vestibulum ipsum, non maximus lacus. Aenean libero sem, molestie eget tortor sit amet, ornare laoreet lacus. Duis eu ornare lacus. Mauris hendrerit, diam ut malesuada hendrerit, nibh leo accumsan orci, ac pulvinar mi ligula interdum odio. Ut suscipit aliquam neque quis suscipit. Nulla et maximus justo. Nulla pharetra lacus sit amet neque scelerisque, in interdum lacus volutpat. Vestibulum purus leo, consectetur ac bibendum id, vehicula vel sapien. Morbi accumsan ullamcorper sapien, vel dapibus dolor ullamcorper vel. Mauris mattis nibh eu diam semper, sed consectetur dui blandit. Suspendisse potenti. Quisque ligula risus, lacinia at nunc non, ullamcorper vehicula eros. Praesent a scelerisque leo, sed ornare quam.", 
                "slug" => "Post-3", 
                "user_id" => 1, 
                "created_at" => new DateTime, 
                "updated_at" => new DateTime
            ],

            [
                "id" => 4, 
                "title" => "Post 4", 
                "description" => "Donec consectetur ligula ac magna semper, vel tempor nisl ullamcorper. Integer vehicula in nibh in hendrerit. Nulla vestibulum lectus non lectus pulvinar, at pulvinar velit elementum. Fusce est sapien, vulputate sed diam id, sodales imperdiet nibh. Nunc tempor sem vel eros euismod, eget suscipit ipsum lobortis. Aliquam semper ex nibh, non mollis ligula sagittis non. Vestibulum ullamcorper nibh at eros luctus pretium. Pellentesque a risus consectetur, ultricies justo et, accumsan tortor. Phasellus imperdiet semper nunc, vitae sollicitudin sapien laoreet id. Nunc dictum, quam a auctor facilisis, turpis felis semper ante, at laoreet justo libero eu quam. Quisque id lacus a neque euismod condimentum. Phasellus ac dui fringilla nibh molestie mattis. Maecenas vulputate ligula vel sodales pellentesque.", 
                "body" => "Donec consectetur ligula ac magna semper, vel tempor nisl ullamcorper. Integer vehicula in nibh in hendrerit. Nulla vestibulum lectus non lectus pulvinar, at pulvinar velit elementum. Fusce est sapien, vulputate sed diam id, sodales imperdiet nibh. Nunc tempor sem vel eros euismod, eget suscipit ipsum lobortis. Aliquam semper ex nibh, non mollis ligula sagittis non. Vestibulum ullamcorper nibh at eros luctus pretium. Pellentesque a risus consectetur, ultricies justo et, accumsan tortor. Phasellus imperdiet semper nunc, vitae sollicitudin sapien laoreet id. Nunc dictum, quam a auctor facilisis, turpis felis semper ante, at laoreet justo libero eu quam. Quisque id lacus a neque euismod condimentum. Phasellus ac dui fringilla nibh molestie mattis. Maecenas vulputate ligula vel sodales pellentesque.<br /><br />Donec pretium vestibulum ipsum, non maximus lacus. Aenean libero sem, molestie eget tortor sit amet, ornare laoreet lacus. Duis eu ornare lacus. Mauris hendrerit, diam ut malesuada hendrerit, nibh leo accumsan orci, ac pulvinar mi ligula interdum odio. Ut suscipit aliquam neque quis suscipit. Nulla et maximus justo. Nulla pharetra lacus sit amet neque scelerisque, in interdum lacus volutpat. Vestibulum purus leo, consectetur ac bibendum id, vehicula vel sapien. Morbi accumsan ullamcorper sapien, vel dapibus dolor ullamcorper vel. Mauris mattis nibh eu diam semper, sed consectetur dui blandit. Suspendisse potenti. Quisque ligula risus, lacinia at nunc non, ullamcorper vehicula eros. Praesent a scelerisque leo, sed ornare quam.", 
                "slug" => "Post-4", 
                "user_id" => 1, 
                "created_at" => new DateTime, 
                "updated_at" => new DateTime
            ],
            
        );
 
        // Uncomment the below to run the seeder
        DB::table('posts')->insert($posts);
    }
 
}
