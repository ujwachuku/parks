@extends('layouts.master')

@section('title')
Family/Group Rates
@endsection

@section('description')

@endsection

@section('styles')

@endsection

@section('content')
<div class="blocks-container">
   <div class="container blog-container">
      <div class="new-block">
         <div class="row">
            <div class="col-md-10 col-md-offset-1 blog-content-column">
               <div class="blog-post detail-post">
                  <div class="data">
                     <div class="text">
                        <div class="blog-post-hat-center-align">                           
                           <h1 class="title">Funplex Family/Group Rates</h1>
                           <div class="author-center-align">
                              <div class="clear"></div>
                           </div>
                           <div class="blog-article-description">Families and groups are entitled to discounts when they come to Funplex Amusement Park. You can find a breakdown of our discounted rates for families and groups.</div>
                        </div>
                        <div class="blog-detail-article">
                           <div class="new-block">
                              <div class="row">
                                 <div class="col-md-12">
                                    <div class="typography-article">
                                    </div>
                                    <div class="clear"></div>
                                 </div>
                              </div>
                              <div class="row">
                                 <div class="col-md-12">
                                    @if(count($groups) > 0)
                                    <div class="typography-article">
                                       <div class="table-responsive">
                                          <table class="table table-responsive">
                                             <tbody>
                                                <tr>
                                                   <th>Number of Persons</th>
                                                   <th>Discounted Rate per Person (N)</th>
                                                </tr>
                                                @foreach($groups as $group)
                                                <tr>
                                                   <td>{{ $group->number_of_persons }}</td>
                                                   <td>{{ $group->price }}</td>
                                                </tr>
                                                @endforeach                                              
                                             </tbody>
                                          </table>
                                       </div>
                                    </div>
                                    @else
                                    <div class="typography-article">
                                       <div class="alert alert-warning">
                                          <p>There are no family/group packages at this time.</p>
                                       </div>
                                    </div>
                                    @endif
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="clear"></div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>
@endsection

@section('scripts')

@endsection

