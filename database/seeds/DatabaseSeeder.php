<?php

use App\Category;
use Illuminate\Database\Seeder;
use App\Guest;
use SimpleSoftwareIO\QrCode\Facades\QrCode;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Crypt;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $admin1 = App\User::create([
        //     'username' => 'admin1',
        //     'name'=>'admin1',
        //     'avatar'=>'https://visualpharm.com/assets/381/Admin-595b40b65ba036ed117d3b23.svg',
        //     'email' => 'admin1@gmail.com',
        //     'password' => '12345678',
        // ]);
        // $admin = App\Role::create(['name'=>'Admin','slug'=>'admin']);
        // $admin1->roles()->attach($admin);

        // $adminRoom1 = App\User::create([
        //     'username' => 'adminroom1',
        //     'name'=>'adminroom1',
        //     'avatar'=>'https://visualpharm.com/assets/381/Admin-595b40b65ba036ed117d3b23.svg',
        //     'email' => 'adminroom1@gmail.com',
        //     'password' => '12345678',
        // ]);

        // $adminRoom = App\Role::create(['name'=>'Admin-Room','slug'=>'admin-room']);
        // $adminRoom1->roles()->attach($adminRoom);
        // $admin1->roles()->attach($adminRoom);

        // $officerRoom1 = App\User::create([
        //     'username' => 'officerroom1',
        //     'name'=>'officerroom1',
        //     'avatar'=>'https://visualpharm.com/assets/381/Admin-595b40b65ba036ed117d3b23.svg',
        //     'email' => 'officerroom1@gmail.com',
        //     'password' => '12345678',
        // ]);
        // $officerRoom2 = App\User::create([
        //     'username' => 'officerroom2',
        //     'name'=>'officer2',
        //     'avatar'=>'https://visualpharm.com/assets/381/Admin-595b40b65ba036ed117d3b23.svg',
        //     'email' => 'officerroom2@gmail.com',
        //     'password' => '12345678',
        // ]);
        // $officerRoom3 = App\User::create([
        //     'username' => 'officerroom3',
        //     'name'=>'officerroom3',
        //     'avatar'=>'https://visualpharm.com/assets/381/Admin-595b40b65ba036ed117d3b23.svg',
        //     'email' => 'officerroom3@gmail.com',
        //     'password' => '12345678',
        // ]);

        // $officerRoom = App\Role::create(['name'=>'Officer-Room','slug'=>'officer-room']);
        // $officerRoom1->roles()->attach($officerRoom);
        // $officerRoom2->roles()->attach($officerRoom);
        // $officerRoom3->roles()->attach($officerRoom);
        // $admin1->roles()->attach($officerRoom);

        // $adminGate1 = App\User::create([
        //     'username' => 'admingate1',
        //     'name'=>'admingate1',
        //     'avatar'=>'https://visualpharm.com/assets/381/Admin-595b40b65ba036ed117d3b23.svg',
        //     'email' => 'admingate1@gmail.com',
        //     'password' => '12345678',
        // ]);

        // $adminGate = App\Role::create(['name'=>'Admin-Gate','slug'=>'admin-gate']);
        // $adminGate1->roles()->attach($adminGate);
        // $admin1->roles()->attach($adminGate);

        // $receptionist1 = App\User::create([
        //     'username' => 'receptionist1',
        //     'name'=>'receptionist1',
        //     'avatar'=>'https://visualpharm.com/assets/381/Admin-595b40b65ba036ed117d3b23.svg',
        //     'email' => 'receptionist1@gmail.com',
        //     'password' => '12345678',
        // ]);
        // $receptionist2 = App\User::create([
        //     'username' => 'receptionist2',
        //     'name'=>'receptionist2',
        //     'avatar'=>'https://visualpharm.com/assets/381/Admin-595b40b65ba036ed117d3b23.svg',
        //     'email' => 'receptionist2@gmail.com',
        //     'password' => '12345678',
        // ]);
        // $receptionist3 = App\User::create([
        //     'username' => 'receptionist3',
        //     'name'=>'receptionist3',
        //     'avatar'=>'https://visualpharm.com/assets/381/Admin-595b40b65ba036ed117d3b23.svg',
        //     'email' => 'receptionist3@gmail.com',
        //     'password' => '12345678',
        // ]);
        // $receptionist4 = App\User::create([
        //     'username' => 'receptionist4',
        //     'name'=>'receptionist4',
        //     'avatar'=>'https://visualpharm.com/assets/381/Admin-595b40b65ba036ed117d3b23.svg',
        //     'email' => 'receptionist4@gmail.com',
        //     'password' => '12345678',
        // ]);
        // $receptionist5 = App\User::create([
        //     'username' => 'receptionist5',
        //     'name'=>'receptionist5',
        //     'avatar'=>'https://visualpharm.com/assets/381/Admin-595b40b65ba036ed117d3b23.svg',
        //     'email' => 'receptionist5@gmail.com',
        //     'password' => '12345678',
        // ]);
        // $receptionist6 = App\User::create([
        //     'username' => 'receptionist6',
        //     'name'=>'receptionist6',
        //     'avatar'=>'https://visualpharm.com/assets/381/Admin-595b40b65ba036ed117d3b23.svg',
        //     'email' => 'receptionist6@gmail.com',
        //     'password' => '12345678',
        // ]);
        // $receptionist7 = App\User::create([
        //     'username' => 'receptionist7',
        //     'name'=>'receptionist7',
        //     'avatar'=>'https://visualpharm.com/assets/381/Admin-595b40b65ba036ed117d3b23.svg',
        //     'email' => 'receptionist7@gmail.com',
        //     'password' => '12345678',
        // ]);
        // $receptionist8 = App\User::create([
        //     'username' => 'receptionist8',
        //     'name'=>'receptionist8',
        //     'avatar'=>'https://visualpharm.com/assets/381/Admin-595b40b65ba036ed117d3b23.svg',
        //     'email' => 'receptionist8@gmail.com',
        //     'password' => '12345678',
        // ]);

        // $receptionist = App\Role::create(['name'=>'Receptionist','slug'=>'receptionist']);
        // $receptionist1->roles()->attach($receptionist);
        // $receptionist2->roles()->attach($receptionist);
        // $receptionist3->roles()->attach($receptionist);
        // $receptionist4->roles()->attach($receptionist);
        // $receptionist5->roles()->attach($receptionist);
        // $receptionist6->roles()->attach($receptionist);
        // $receptionist7->roles()->attach($receptionist);
        // $receptionist8->roles()->attach($receptionist);
        // $adminGate1->roles()->attach($receptionist);
        // $admin1->roles()->attach($receptionist);

        // $officerGate1 = App\User::create([
        //     'username' => 'officergate1',
        //     'name'=>'officergate1',
        //     'avatar'=>'https://visualpharm.com/assets/381/Admin-595b40b65ba036ed117d3b23.svg',
        //     'email' => 'officergate1@gmail.com',
        //     'password' => '12345678',
        // ]);
        // $officerGate2 = App\User::create([
        //     'username' => 'officergate2',
        //     'name'=>'officergate2',
        //     'avatar'=>'https://visualpharm.com/assets/381/Admin-595b40b65ba036ed117d3b23.svg',
        //     'email' => 'officergate2@gmail.com',
        //     'password' => '12345678',
        // ]);
        // $officerGate3 = App\User::create([
        //     'username' => 'officergate3',
        //     'name'=>'officergate3',
        //     'avatar'=>'https://visualpharm.com/assets/381/Admin-595b40b65ba036ed117d3b23.svg',
        //     'email' => 'officergate3@gmail.com',
        //     'password' => '12345678',
        // ]);
        // $officerGate4 = App\User::create([
        //     'username' => 'officergate4',
        //     'name'=>'officergate4',
        //     'avatar'=>'https://visualpharm.com/assets/381/Admin-595b40b65ba036ed117d3b23.svg',
        //     'email' => 'officergate4@gmail.com',
        //     'password' => '12345678',
        // ]);

        // $officerGate = App\Role::create(['name'=>'Officer-Gate','slug'=>'officer-gate']);
        // $officerGate1->roles()->attach($officerGate);
        // $officerGate2->roles()->attach($officerGate);
        // $officerGate3->roles()->attach($officerGate);
        // $officerGate4->roles()->attach($officerGate);
        // $admin1->roles()->attach($officerGate);

        // $category1 = App\Category::create([
        //     'name'=>'Regular',
        //     'slug'=>'REG',
        //     'total_guest' => 0,
        // ]);
        // $category2 = App\Category::create([
        //     'name'=>'VIP',
        //     'slug'=>'VIP',
        //     'total_guest' => 0,
        // ]);
        // $category3 = App\Category::create([
        //     'name'=>'VVIP Beach Front',
        //     'slug'=>'VVIP',
        //     'total_guest' => 0,
        // ]);

        // //Muse 400
        // for ($x = 1; $x <=400; $x++) {
        //     $guest = Guest::create([
        //         'name'=>'MM-'.$x,
        //         'category_id'=>$category1->id,
        //     ]);

        //     $barcodeId= str_pad($guest->id,13,'0',STR_PAD_LEFT);
        //     $guest->barcode_id=$barcodeId;
        //     $guest->save();
        // }
        // //FFI 700
        // for ($x = 1; $x <=700; $x++) {
        //     $guest = Guest::create([
        //         'name'=>'FFI-'.$x,
        //         'category_id'=>$category1->id,
        //     ]);

        //     $barcodeId= str_pad($guest->id,13,'0',STR_PAD_LEFT);
        //     $guest->barcode_id=$barcodeId;
        //     $guest->save();
        // }
        // //ASC 150
        // for ($x = 1; $x <=150; $x++) {
        //     $guest = Guest::create([
        //         'name'=>'ASC-'.$x,
        //         'category_id'=>$category1->id,
        //     ]);

        //     $barcodeId= str_pad($guest->id,13,'0',STR_PAD_LEFT);
        //     $guest->barcode_id=$barcodeId;
        //     $guest->save();
        // }
        // //HDCI 150
        // for ($x = 1; $x <=150; $x++) {
        //     $guest = Guest::create([
        //         'name'=>'HDCI-'.$x,
        //         'category_id'=>$category1->id,
        //     ]);

        //     $barcodeId= str_pad($guest->id,13,'0',STR_PAD_LEFT);
        //     $guest->barcode_id=$barcodeId;
        //     $guest->save();
        // }

        // //REG 2500 +200
        // for ($x = 1; $x <=2700; $x++) {
        //     $guest = Guest::create([
        //         'category_id'=>$category1->id,
        //     ]);

        //     $barcodeId= str_pad($guest->id,13,'0',STR_PAD_LEFT);
        //     $guest->barcode_id=$barcodeId;
        //     $guest->save();
        // }
        // //VIP 960
        // for ($x = 1; $x <=960; $x++) {
        //     $guest = Guest::create([
        //         'category_id'=>$category2->id,
        //     ]);

        //     $barcodeId= str_pad($guest->id,13,'0',STR_PAD_LEFT);
        //     $guest->barcode_id=$barcodeId;
        //     $guest->save();
        // }
        // //VVIP Beach Front 570
        // for ($x = 1; $x <=570; $x++) {
        //     $guest = Guest::create([
        //         'category_id'=>$category3->id,
        //     ]);

        //     $barcodeId= str_pad($guest->id,13,'0',STR_PAD_LEFT);
        //     $guest->barcode_id=$barcodeId;
        //     $guest->save();
        // }

        // this
        // //REG 2500
        // for ($x = 1; $x <=2500; $x++) {
        //     $category1->total_guest+=1;
        //     $category1->save();

        //     $guest = Guest::create([
        //         'name'=>'',
        //         'category_id'=>$category1->id,
        //     ]);

        //     $appUrl = config('app.url');
        //     $id=$guest->id;
        //     $encryptedId=Crypt::encryptString($id);

        //     $url = $appUrl.'/guest-qrcode/'.$encryptedId;
        //     $qrCode = QrCode::format('png')->size(500)->generate($url);

        //     $name=explode(" ",$category1->slug)[0].'-'.str_pad($category1->total_guest,4,'0',STR_PAD_LEFT);
        //     $fileName = 'guest-qr/'.$name.'.jpg';
        //     Storage::put('public/'.$fileName, $qrCode);
        //     //save qr to user
        //     $guest->qr = $fileName;
        //     $guest->save();

        // }
        // //VIP 960
        // for ($x = 1; $x <=960; $x++) {
        //     $category2->total_guest+=1;
        //     $category2->save();

        //     $guest = Guest::create([
        //         'name'=>'',
        //         'category_id'=>$category2->id,
        //     ]);

        //     $appUrl = config('app.url');
        //     $id=$guest->id;
        //     $encryptedId=Crypt::encryptString($id);

        //     $url = $appUrl.'/guest-qrcode/'.$encryptedId;
        //     $qrCode = QrCode::format('png')->size(500)->generate($url);

        //     $name=explode(" ",$category2->slug)[0].'-'.str_pad($category2->total_guest,4,'0',STR_PAD_LEFT);
        //     $fileName = 'guest-qr/'.$name.'.jpg';
        //     Storage::put('public/'.$fileName, $qrCode);
        //     //save qr to user
        //     $guest->qr = $fileName;
        //     $guest->save();


        // }
        // //VVIP Beach Front 570
        // for ($x = 1; $x <=570; $x++) {
        //     $category3->total_guest+=1;
        //     $category3->save();
        //     $guest = Guest::create([
        //         'name'=>'',
        //         'category_id'=>$category3->id,
        //     ]);

        //     $appUrl = config('app.url');
        //     $id=$guest->id;
        //     $encryptedId=Crypt::encryptString($id);

        //     $url = $appUrl.'/guest-qrcode/'.$encryptedId;
        //     $qrCode = QrCode::format('png')->size(500)->generate($url);

        //     $name=explode(" ",$category3->slug)[0].'-'.str_pad($category3->total_guest,4,'0',STR_PAD_LEFT);
        //     $fileName = 'guest-qr/'.$name.'.jpg';
        //     Storage::put('public/'.$fileName, $qrCode);
        //     //save qr to user
        //     $guest->qr = $fileName;
        //     $guest->save();


        // }

        // //Muse 400
        // for ($x = 1; $x <=400; $x++) {
        //     $category1->total_guest+=1;
        //     $category1->save();

        //     $guest = Guest::create([
        //         'name'=>'MM-'.$x,
        //         'category_id'=>$category1->id,
        //     ]);

        //     $appUrl = config('app.url');
        //     $id=$guest->id;
        //     $encryptedId=Crypt::encryptString($id);

        //     $url = $appUrl.'/guest-qrcode/'.$encryptedId;
        //     $qrCode = QrCode::format('png')->size(500)->generate($url);

        //     $name=explode(" ",$category1->slug)[0].'-'.str_pad($category1->total_guest,4,'0',STR_PAD_LEFT);
        //     $fileName = 'guest-qr/'.$name.'.jpg';
        //     Storage::put('public/'.$fileName, $qrCode);
        //     //save qr to user
        //     $guest->qr = $fileName;
        //     $guest->save();


        // }
        // //FFI 700
        // for ($x = 1; $x <=700; $x++) {
        //     $category1->total_guest+=1;
        //     $category1->save();

        //     $guest = Guest::create([
        //         'name'=>'FFI-'.$x,
        //         'category_id'=>$category1->id,
        //     ]);

        //     $appUrl = config('app.url');
        //     $id=$guest->id;
        //     $encryptedId=Crypt::encryptString($id);

        //     $url = $appUrl.'/guest-qrcode/'.$encryptedId;
        //     $qrCode = QrCode::format('png')->size(500)->generate($url);

        //     $name=explode(" ",$category1->slug)[0].'-'.str_pad($category1->total_guest,4,'0',STR_PAD_LEFT);
        //     $fileName = 'guest-qr/'.$name.'.jpg';
        //     Storage::put('public/'.$fileName, $qrCode);
        //     //save qr to user
        //     $guest->qr = $fileName;
        //     $guest->save();


        // }
        // //ASC 150
        // for ($x = 1; $x <=150; $x++) {
        //     $category1->total_guest+=1;
        //     $category1->save();

        //     $guest = Guest::create([
        //         'name'=>'ASC-'.$x,
        //         'category_id'=>$category1->id,
        //     ]);

        //     $appUrl = config('app.url');
        //     $id=$guest->id;
        //     $encryptedId=Crypt::encryptString($id);

        //     $url = $appUrl.'/guest-qrcode/'.$encryptedId;
        //     $qrCode = QrCode::format('png')->size(500)->generate($url);

        //     $name=explode(" ",$category1->slug)[0].'-'.str_pad($category1->total_guest,4,'0',STR_PAD_LEFT);
        //     $fileName = 'guest-qr/'.$name.'.jpg';
        //     Storage::put('public/'.$fileName, $qrCode);
        //     //save qr to user
        //     $guest->qr = $fileName;
        //     $guest->save();
        // }
        // //HDCI 150
        // for ($x = 1; $x <=150; $x++) {
        //     $category1->total_guest+=1;
        //     $category1->save();

        //     $guest = Guest::create([
        //         'name'=>'HDCI-'.$x,
        //         'category_id'=>$category1->id,
        //     ]);

        //     $appUrl = config('app.url');
        //     $id=$guest->id;
        //     $encryptedId=Crypt::encryptString($id);

        //     $url = $appUrl.'/guest-qrcode/'.$encryptedId;
        //     $qrCode = QrCode::format('png')->size(500)->generate($url);

        //     $name=explode(" ",$category1->slug)[0].'-'.str_pad($category1->total_guest,4,'0',STR_PAD_LEFT);
        //     $fileName = 'guest-qr/'.$name.'.jpg';
        //     Storage::put('public/'.$fileName, $qrCode);
        //     //save qr to user
        //     $guest->qr = $fileName;
        //     $guest->save();
        // }

        // $category1=Category::where('id',1)->first();
        //Reg 1200
        // for ($x = 3901; $x <=5100; $x++) {
        //         $category1->total_guest+=1;
        //         $category1->save();
    
        //         $guest = Guest::create([
        //             'name'=>'',
        //             'category_id'=>$category1->id,
        //         ]);
    
        //         $appUrl = config('app.url');
        //         $id=$guest->id;
        //         $encryptedId=Crypt::encryptString($id);
    
        //         $url = $appUrl.'/guest-qrcode/'.$encryptedId;
        //         $qrCode = QrCode::format('png')->size(500)->generate($url);
    
        //         $name=explode(" ",$category1->slug)[0].'-'.str_pad($category1->total_guest,4,'0',STR_PAD_LEFT);
        //         $fileName = 'guest-qr/'.$name.'.jpg';
        //         Storage::put('public/'.$fileName, $qrCode);
        //         //save qr to user
        //         $guest->qr = $fileName;
        //         $guest->save();
    
        //     }

        $category2=Category::where('id',2)->first();

         for ($x = 1; $x <=100; $x++) {
                $category2->total_guest+=1;
                $category2->save();
    
                $guest = Guest::create([
                    'name'=>'',
                    'category_id'=>$category2->id,
                ]);
    
                $appUrl = config('app.url');
                $id=$guest->id;
                $encryptedId=Crypt::encryptString($id);
    
                $url = $appUrl.'/guest-qrcode/'.$encryptedId;
                $qrCode = QrCode::format('png')->size(500)->generate($url);
    
                $name=explode(" ",$category2->slug)[0].'-'.str_pad($category2->total_guest,4,'0',STR_PAD_LEFT);
                $fileName = 'guest-qr/'.$name.'.jpg';
                Storage::put('public/'.$fileName, $qrCode);
                //save qr to user
                $guest->qr = $fileName;
                $guest->save();
    
            }
    
    }
}
