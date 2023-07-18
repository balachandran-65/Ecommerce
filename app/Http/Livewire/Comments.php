<?php
// functions written page
// this model

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\product;



class Comments extends Component
{
    public $comments;
    
    public $val;
    public $report='please fill this feild';
    public $newcomment;
  

    public function mount(){
        //    dd($comments);
           $initialcomments=product::latest()->get();
        //    dd($initialcomments);
            
            $this->comments= $initialcomments;
        
           }

   public function addfun(){
    
//    if($this->val==''){
   
//     $this->report='please fill this input box';

//     return;
//   } or or or or 
 
    $this->validate([
        'val'=>'required']);
   
    $newinsert = product::create(['product_name'=> $this->val,'categories_id'=> 1]);

    $this->comments->push($newinsert);
 


    $this->val='';
    session()->flash('sccessmessage','Added sucessfully');
   }
//    start live wire
//    public function mount(){
//     $this->val='database ework check';

//    }


 public function remove($cid){
    // /d($cid);
    $comment=product::find($cid);
    $comment->delete();
    $this->comments=$this->comments->except($cid);

 }


   

    public function render()
    {
        return view('livewire.comments');
    }
}
