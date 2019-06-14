@extends('layout.admin')
@section('content')
            <div class="col-sm-10 col-sm-offset-1">
        <div class="page-header">
            <h3>ADD MENU | SECTION</h3>
        </div>
        <form method="post">
            {{ csrf_field() }}
            <div class="form-group">
                <label>Select Manu </label><small> (only if you want to add section)</small>
                <Select name="menu_id" class="form-control">
                    <option value="non">Select Menu</option>
                    @foreach (App\Menu::all(['id','title']) as $menu)
                        <option value="{{$menu->id}}">{{$menu->title}}</option>
                    @endforeach
                </Select>
            </div>
            <div class="form-group">
                <label>Enter Title</label>
                <input type="text" name="title" class="form-control" placeholder="Enter Title">
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-primary">Add Menu | Section</button>
            </div>
        </form>
        
        <div>
            <table class="table table-condensed table-hover table-responsive table-bordered">
                <thead>
                    <tr>
                        <th>Menu</th>
                        <th>Section</th>
                        <th width="80">Page ID</th>
                        <th >Option</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach (App\Menu::with('sections')->get() as $menu)
                    <tr>
                        <td>{{$menu->title}}</td>
                        <td></td>
                        <td class="text-right">{{$menu->page_id}}</td>
                                  <td>
                                      <form class="inline" method="post" action="/admin/Menu/{{$menu->id}}">
                                        {{ csrf_field() }}
                                        {{method_field('PATCH')}}
                                        <button class="btn-link">edit</button>
                                    </form>
                                    <form class="inline"  method="post" action="/admin/Menu/{{$menu->id}}">
                                        {{ csrf_field() }}
                                        {{method_field('DELETE')}}
                                        <button class="btn-link">delete</button>
                                    </form>
                                </td>
                            </tr>
                            @foreach($menu->sections as $section)
                            <tr>
                                <td></td>
                                <td>{{$section->title}}</td>
                                <td class="text-right">{{$section->page_id}}</td>
                                <td>
                                    <form class="inline" method="post" action="/admin/Section/{{$section->id}}">
                                        {{ csrf_field() }}
                                        {{method_field('PATCH')}}
                                        <button class="btn-link"><i class="fa fa-edit" aria-hidden="true"></i> edit</button>
                                    </form>
                                    <form class="inline"  method="post" action="/admin/Section/{{$section->id}}">
                                              {{ csrf_field() }}
                                              {{method_field('DELETE')}}
                                              <button class="btn-link"><i class="fa fa-trash-o" aria-hidden="true"></i> delete</button>
                                            </form>
                                    </td>
                                </tr>
                              @endforeach
                              @endforeach
                    </tbody>
                </table>
            </div>
        </div>
@endsection