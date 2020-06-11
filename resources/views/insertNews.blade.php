@extends('masters.masterHome')
@section('part1')
    <div class="container">
        <div class="col-sm-8">
            <h4 class="page-header">Insert news</h4>
            @if($errors->any())
                @foreach ($errors->all() as $item)
                  <div class="alert alert-danger" role="alert">
                    {{$item}}
                  </div>

                @endforeach
            @endif

            @if(isset($_GET['check']))
                @if(!empty($_GET['check']))
                    <div class="alert alert-success" role="alert">
                        <?php
                            echo ("Insert news ");
                        ?>
                    </div>
                @else
                    <div class="alert alert-danger" role="alert">
                        Error in Insert
                    </div>
                @endif
            @endif
            <form role="form" method="POST" action="/news/insert">
                {{csrf_field()}}
                <div class="form-group float-label-control">
                    <label for="">Titr News</label>
                    <input type="text" name="titrnews" class="form-control" placeholder="Titr News">
                    @if ($errors->has('titrnews'))
                        <p style="color:red">{{$errors->first('titrnews')}}</p>
                    @endif
                </div>
                <div class="form-group float-label-control">
                    <label for="">News</label>
                    <textarea class="form-control" name="textnews" placeholder="Text news" rows="10"></textarea>
                    @if ($errors->has('textnews'))
                        <p style="color:red">{{$errors->first('textnews')}}</p>
                    @endif
                </div>
                <div class="form-group float-label-control">
                    <label for=""></label>
                    <textarea class="form-control" name="summary" placeholder="Text news" maxlength="200"  rows="3"></textarea>
                    @if ($errors->has('summary'))
                        <p style="color:red">{{$errors->first('summary')}}</p>
                    @endif
                </div>
                <div class="form-group float-label-control">
                    <label>Category</label>
                    <select class="form-control" name="category">
                        <option>1</option>
                        <option>2</option>
                        <option>3</option>
                        <option>4</option>
                        <option>5</option>
                    </select>
                    @if ($errors->has('category'))
                        <p style="color:red">{{$errors->first('category')}}</p>
                    @endif
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
@endsection
