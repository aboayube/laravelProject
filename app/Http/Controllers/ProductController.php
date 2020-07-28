<?php

namespace App\Http\Controllers;
use App\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    //
    public function viewproduct(){
        //جلب بيانات من قاعده بيانات
       $product=Product::all();
        //جيب العنصر
       // $product=Product::find(14);
//اذا مش موجود ينبهك انو مش موجود العنصر        
    //    $product=Product::findOrFail(14);
        //جيب العناصر في مصفوفة مفتاح وقيمة
      //$product=Product::where('id',15)->frist();
          
        
        $arr=array('product'=>$product);
        return view('product.view',$arr);
    }
    
         //
    public function found($id){
        //جلب بيانات من قاعده بيانات
        $product=Product::find($id);
        
        $arr=array('product'=>$product);
        return view('product.view',$arr);
    }
    public function addProduct(Request $request){
        //تنفيذ عند استدعاء post
    //only execute post
        if($request->isMethod('post')){
            //تحقق من عناصر مدخلة
            $this->validate($request,[
                //unique:products يعني ما يكونش موجود مسبقا
            'name'=>'required|max:25|unique:products',   
            'price'=>'required|min:2|max:8'
            ]);
            
            
            
            //save in data base
            $newProduct=new Product();
            $newProduct->name=$request->input('name');
            $newProduct->price=$request->input('price');
            $newProduct->save();
        }
        
        return view('product.add');
    }
    public function EditProduct(Request $request,$id){
        
        if($request->isMethod('post')){
             $newProduct=Product::find($id);
            $newProduct->name=$request->input('name');
            $newProduct->price=$request->input('price');
            $newProduct->save(); 
            
            
            return redirect("product");
        }else{
        $product=Product::find($id);
        $arr=array('product'=>$product);
        
        
        return view('product.edit',$arr);
    }
    }
}

