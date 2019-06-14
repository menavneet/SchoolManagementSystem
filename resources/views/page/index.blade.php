@extends('layout.admin')
@section('content')
<div class="col-sm-10 col-sm-offset-1">
    <div class="page-header">
        <h3>Edit Page</h3>
    </div>
    <table class="table table-condensed table-hover table-responsive table-bordered">
                <thead>
                  <tr>
                    <th>Menu</th>
                    <th>Section</th>
                    <th>Last Update</th>
                    <th width="80">Page ID</th>
                    <th >Option</th>
                  </tr>
                </thead>
                <tbody>
                      @foreach (App\Menu::with('sections')->get() as $menu)
                          <tr>
                              <td>{{$menu->title}}</td>
                              <td></td>
                              <td>{{$menu->updated_at}}</td>
                              <td class="text-right">{{$menu->page_id}}</td>
                              <td>
                                  <form class="inline" method="post" action="/admin/Page/{{$menu->page_id}}">
                                      {{ csrf_field() }}
                                      {{method_field('PATCH')}}
                                      <button class="btn-link"><i class="fa fa-edit" aria-hidden="true"></i> edit page</button>
                                  </form>

                              </td>
                          </tr>
                          @foreach($menu->sections as $section)
                            <tr>
                                <td></td>
                                <td>{{$section->title}}</td>
                                <td>{{$section->updated_at}}</td>
                                <td class="text-right">{{$section->page_id}}</td>
                                <td>
                                        <form class="inline" method="post" action="/admin/Page/{{$section->page_id}}">
                                            {{ csrf_field() }}
                                            {{method_field('PATCH')}}
                                            <button class="btn-link"><i class="fa fa-edit" aria-hidden="true"></i> edit page</button>
                                        </form>
                                </td>
                            </tr>
                          @endforeach
                      @endforeach
                </tbody>
              </table>
</div>
@endsection