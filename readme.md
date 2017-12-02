## 说明


1. composer require jarvis/md5 

   ​

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

   'aliases' => [    
   	'Md5Hasher' => Jarvis\Md5\Facade\Md5Hasher::class,
   ]
   ```

   ​

4. For Example

   ```
   <?php

   namespace App\Http\Controllers\Test;

   use Illuminate\Http\Request;
   use App\Http\Controllers\Controller;
   use Md5Hasher;


   /**
    * Class JarvisController
    * @package App\Http\Controllers\Test
    */
   class JarvisController extends Controller
   {
       /**
        * 生成MD5加密值
        * @return mixed
        */
       public function md5(){
           //return app('jarvis-md5')->make('123456',['salt'=>'Jarvis']);
          return Md5Hasher::make('123456',['salt'=>'Jarvis']);
       }

       /**
        *检验是否正确
        */
       public function md5check(){

           //true
           //$bool = app('jarvis-md5')->check('123456','1f3653b1e691bac8a0cf38e84b416373',['salt'=>'Jarvis']);

           //false
           //$bool = app('jarvis-md5')->check('123456-','1f3653b1e691bac8a0cf38e84b416373',['salt'=>'Jarvis']);
           //dd($bool);

           $bool = Md5Hasher::check('123456-','1f3653b1e691bac8a0cf38e84b416373',['salt'=>'Jarvis']);
           dd($bool);
       }

   }

   ```


5.Tinker use check

   ```
☁ Laravel54 [master] ⚡php artisan tinker
app('jarvis-md5')->make('123456',['salt'=>'Jarvis'])
=> "1f3653b1e691bac8a0cf38e84b416373"
>>> app('jarvis-md5')->check('123456','1f3653b1e691bac8a0cf38e84b416373',['salt'=>'Jarvis'])
=> true
>>> app('jarvis-md5')->check('123456','1f3653b1e691bac8a0cf38e84b416373',['salt'=>'Jarvis1'])
=> false
   ```
​         