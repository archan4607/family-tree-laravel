<table >
    <thead>
        <tr>
            {{-- <th>No.</th> --}}
            <th>User Name</th>
            <th>Relation is</th>
            <th>Relations With</th>
            <th>Date Of Birth</th>
            <th>Mobile</th>
            <th>Email</th>
            <th>User Status</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
        {{$rel_2[4]->user_id.''.$rel[4]->rel_user_id}}
        @for ($i =0; $i < count($rel) ; $i++)
            
        <tr>
            {{-- <td>{{$i++}}</td> --}}
            <td>{{$rel_2[$i]->fname.' '.$rel_2[$i]->lname}}</td>
            <td>
                @if($rel[$i]->relation==1)
                    {{'Father'}}
                @elseif($rel[$i]->relation==2)
                    {{'Mother'}}
                @elseif($rel[$i]->relation==3)
                    {{'Brother'}}
                @elseif($rel[$i]->relation==4)
                    {{'Sister'}}
                @elseif($rel[$i]->relation==5)
                    {{'Husband'}}
                @elseif($rel[$i]->relation==6)
                    {{'Wife'}}
                @elseif($rel[$i]->relation==7)
                    {{'Son'}}
                @elseif($rel[$i]->relation==8)
                    {{'Daughter'}}
                @else
                    {{'some error'}}
                @endif
            </td>
            <td>{{$rel[$i]->fname.' '.$rel[$i]->lname}}</td>
            {{-- <td>{{ $rel->martial_status==1 ? 'Un-Married':'Married' }}</td> --}}
            <td>{{ $rel[$i]->dob=="" ? '---': $rel[$i]->dob}}</td>
            <td>{{ $rel[$i]->num=="" ? '---': $rel[$i]->num}}</td>
            <td>{{$rel[$i]->email}}</td>
            <td> <span class="badge rounded-pill 
                @if($rel[$i]->rel_status==0)
                    {{'badge-danger'}}
                @elseif($rel[$i]->rel_status==1)
                    {{'badge-primary'}}
                @elseif($rel[$i]->rel_status==2)
                    {{'badge-secondary'}}
                @elseif($rel[$i]->rel_status==3)
                    {{'badge-warning'}}
                @elseif($rel[$i]->rel_status==4)
                    {{'badge-success'}}
                @elseif($rel[$i]->rel_status==5)
                    {{'badge-info'}}
                @elseif($rel[$i]->rel_status==6)
                    {{'badge-dark'}}
                @else
                    {{'badge-light'}}
                @endif
                ">
                @if($rel[$i]->rel_status==0)
                    {{'Not verified'}}
                @elseif($rel[$i]->rel_status==1)
                    {{'Detail Filled'}}
                @elseif($rel[$i]->rel_status==2)
                    {{'Relation Added'}}
                @elseif($rel[$i]->rel_status==3)
                    {{'Details pending'}}
                @elseif($rel[$i]->rel_status==4)
                    {{'Active'}}
                @elseif($rel[$i]->rel_status==5)
                    {{'inactive'}}
                @elseif($rel[$i]->rel_status==6)
                    {{'Dead'}}
                @else
                    {{'Unknow'}}
                @endif
            </span></td>
            <td>
                <ul class="action">
{{-- <button class="btn btn-primary" type="button" data-bs-toggle="modal" data-bs-target="#exampleModalCenter">Vertically centered</button> --}}
                    {{-- <li class="view" ><a href="{{route('view-user-profile',$user->id    )}}" data-toggle="tooltip" data-bs-placement="bottom" title="View"><i class="icofont icofont-eye-alt"></i></a></li>&nbsp;&nbsp;&nbsp; --}}
                    <li class="edit"><a href="#"  data-toggle="tooltip" data-bs-placement="bottom"  title="Edit"><i class="icon-pencil-alt"></i></a></li><br>
                    <li class="delete"><a href="#"  data-toggle="tooltip" data-bs-placement="bottom" title="Delete"><i class="icon-trash"></i></a></li>
                </ul>
            </td>
        </tr>
        @endfor
        {{-- @endforeach --}}
    </tbody>
</table>