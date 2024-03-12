<form action="{{route('student.destroy', $student->id)}}" method="POST" enctype="multipart/form-data">
    @csrf
    @method('delete')
    <div class="modal fade" id="ModalDelete{{$student->id}}" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">  
                    <h4 class="modal-title">{{__('Student Delete')}}</h4>
                    <button class="close" type ="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal body">
                    Are you sure want to delete this Student? <b>{{$student->id}}?</b>
                </div>
                <div class="footer">
                    <button type="button" class="btn btn-outline-primary" data-dismiss="modal">
                        {{__('Cancel')}}
                    </button>                
                    <button type="button" class="btn btn-outline-danger" data-dismiss="modal">
                        {{__('Delete')}}
                    </button>
                </div>
            </div>
        </div>
    </div>
</form>