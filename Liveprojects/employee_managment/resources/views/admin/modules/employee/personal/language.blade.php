<form id="langauge_form_id"  name="langauge_add" action="{{route('personal.langauge.add')}}"  method="post" enctype="multipart/form-data">
@csrf
        <input type="hidden" name="user_id" value="{{$emp->uuid}}">
    <div class="row">
        <div class="col-12">
            <table class="table">
                <thead>
                    <tr>
                    <th scope="col">Languages Know</th>
                    <th scope="col">Read</th>
                    <th scope="col">Write</th>
                    <th scope="col">Speak</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                    @if(count($langauge))
                        @foreach($langauge as $lang)
                        <td>
                            <div class="form-group floating-label">
                                <input type="text" name="language_id[] " value="{{$lang->id}}" class="form-control form-control-lg">
                            </div>  
                        </td>
                        <td><input type="checkbox" id="read" name="read[]" value="YES"></td>
                        <td><input type="checkbox" id="write" name="write[]" value="YES"></td>
                        <td><input type="checkbox" id="speack" name="speack[]" value="YES"></td>
                    </tr>
                    @endforeach
                @endif  
                </tbody>
            </table>
        </div>
    </div>
    <div class="form-card-footer card-footer p-t-20 p-0 text-right">
            <div class="btn-group mr-2" role="group" aria-label="Second group">
                <a href="" >
                    <button class="theme-btn-outline">cancel</button>
                </a>
            </div>
            <div class="btn-group mr-2" role="group" aria-label="Second group">
                <button type="submit"  value="submit" name="submit" class="theme-btn text-white">Save</button>
            </div>
        </div>    
</form>

@push('scripts')
 <script>
    
</script>
 @endpush   