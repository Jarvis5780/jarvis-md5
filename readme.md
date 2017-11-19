## 说明


1. 安装 composer require jarvis/md5 

2. reuqire安装 composer install

   ```
   {
       "require": {
            "jarvis/md5": "~1.0"
       }
   }
   ```

   ​

3. Find the providers key in config/app.php and register the Captcha Service Provider.

   ```
   'providers' => [    
   	Jarvis\Md5\Md5HasherProvider::class,
   ]
   ```

   ​

4. For Example

   ```
   <?php

   namespace App\Http\Controllers\Test;

   use App\Http\Controllers\Controller;
   use Jarvis\Md5;
   ```


   class JarvisController extends Controller
   {
       public function md5(){
           return app('jarvis-md5')->make('123456',['salt'=>'Jarvis']);
       }
    
       public function md5check(){
           //$bool = app('jarvis-md5')->check('123456','1f3653b1e691bac8a0cf38e84b416373',['salt'=>'Jarvis']);
           $bool = app('jarvis-md5')->check('123456-','1f3653b1e691bac8a0cf38e84b416373',['salt'=>'Jarvis']);
           dd($bool);
       }
   }
   ```

   4.tinker use

   ```
   ☁  Laravel54 [master] ⚡php artisan tinker
   >>> app('jarvis-md5')->make('123456',['salt'=>'Jarvis'])
           => "1f3653b1e691bac8a0cf38e84b416373"
           >>> app('jarvis-md5')->check('123456','1f3653b1e691bac8a0cf38e84b416373',['salt'=>'Jarvis'])
           => true
           >>> app('jarvis-md5')->check('123456','1f3653b1e691bac8a0cf38e84b416373',['salt'=>'Jarvis1'])
           => false
   ```

   


  


   ```