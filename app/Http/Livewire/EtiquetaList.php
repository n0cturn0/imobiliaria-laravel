<?php

namespace App\Http\Livewire;

use App\Models\LancamentoEtiquetaModel;
use Livewire\Component;
use Illuminate\Support\Facades\DB;
class EtiquetaList extends Component
{


    public function render()
    {
    return view('livewire.etiqueta-list' , ['etiquetas' => $etiquetas = DB::table('lancamentos_etiqueta')->distinct()->get()]);
    }

    protected $listeners = ['deleteConfirmed' => 'deleteAppointment'];
    public $appoimentid = null;
    public function remove($id)
   {
    $this->appoimentid = $id;
    $this->dispatchBrowserEvent('show-delete-confirmation');
   }

   public function deleteAppointment()
   {
   $appoimentid = LancamentoEtiquetaModel::findOrfail($this->appoimentid);
   $appoimentid->delete();
   }


}
