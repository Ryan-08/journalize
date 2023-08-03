@extends('layout.master')

@section('title', $context['page'])
@section('content')
<section class="event">
    <h2 class="title">{{$context['page']}}</h2>
    <div class="evet-profile-container table-responsive">
        <table class="table table-striped table-hover align-middle table-bordered" style="text-align: left;">
            <thead>
                <tr>
                    <th scope="col">Title</th>
                    <th scope="col">Author</th>
                    <th scope="col">Place</th>
                    <th scope="col">Date</th>
                    <th scope="col">Category</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody class="table-group-divider">
                <tr>
                    <th scope="row">velit quo corporis, suscipit odio id maxime facere aliquid dolores quod dolore
                        mollitia!</th>
                    <td>Nemo, quidem? Corrupti hic</td>
                    <td>Lorem ipsum dolor</td>
                    <td>2022</td>
                    <td>Kimia Analisis</td>
                    <td colspan="2">
                        <div class="button-wrapper">
                            <button type="button" class="btn-prime" data-bs-toggle="modal"
                                data-bs-target="#exampleModal">Edit</button>
                            <button type="button" class="btn-prime" data-bs-toggle="modal"
                                data-bs-target="#exampleModal">Delete</button>
                        </div>
                    </td>
                </tr>
                <tr>
                    <th scope="row">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Rerum amet error neque
                        asperiores quae! Libero nisi fuga quos? A magni ipsam adipisci molestiae libero modi sint totam,
                        temporibus quasi possimus?</th>
                    <td>Nemo, quidem? Corrupti hic</td>
                    <td>Lorem ipsum dolor</td>
                    <td>2022</td>
                    <td>Kimia Analisis</td>
                    <td colspan="2">
                        <div class="button-wrapper">
                            <a href="{{url('auth/project/1')}}" class="btn-prime" data-bs-toggle="modal"
                                data-bs-target="#exampleModal2">Edit</a>
                            <button type="button" class="btn-prime" data-bs-toggle="modal"
                                data-bs-target="#exampleModal" data-bs-myevent="Delete/id=1">Delete</button>
                        </div>
                    </td>
                </tr>
            </tbody>
        </table>

    </div>
</section>

<!-- Modal -->
<div class="modal fade" id="exampleModal2" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="/action" class="form">
                    <div class="row">
                        <div class="col">
                            @if(!is_null($context['data']))
                            <div class="input-wrapper">
                                <input type="text" name="" placeholder="Title" value="nama2">
                            </div>
                            @endif
                            <div class="input-wrapper">
                                <input type="text" name="" placeholder="Author" value="nama2">
                            </div>
                            <div class="input-wrapper">
                                <input type="text" name="" placeholder="Place">
                            </div>
                            <div class="input-wrapper">
                                <input type="text" name="" placeholder="Date">
                            </div>
                            <div class="input-wrapper">
                                <input type="text" name="" placeholder="Category">
                            </div>
                        </div>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-prime">Save changes</button>
            </div>
        </div>
    </div>
</div>
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="/action" class="form">
                    <div class="row">
                        <div class="col">
                            @if(!is_null($context['data']))
                            <div class="input-wrapper">
                                <input type="text" name="" placeholder="Title" value="nama1">
                            </div>
                            @endif
                            <div class="input-wrapper">
                                <input type="text" name="" placeholder="Author" value="nama1">
                            </div>
                            <div class="input-wrapper">
                                <input type="text" name="" placeholder="Place">
                            </div>
                            <div class="input-wrapper">
                                <input type="text" name="" placeholder="Date">
                            </div>
                            <div class="input-wrapper">
                                <input type="text" name="" placeholder="Category">
                            </div>
                        </div>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-prime">Save changes</button>
            </div>
        </div>
    </div>
</div>

<!-- <div class="image-container">
    <img src="{{ asset('img/pp.jpg') }}" alt="profile" width="120" height="120">
    <button class="btn-prime">Ubah Foto</button>
    <a href="#">View Profile</a>
</div>
<div class="form-container">
    <form action="" class="form">
        <div class="row">
            <div class="col class="input-wrapper">
                    <input type="text" name="" placeholder="Nama">
                </div>
                <div class="input-wrapper">
                    <input type="text" name="" placeholder="NIP">
                </div>
                <div class="input-wrapper">
                    <input type="text" name="" placeholder="Category">
                </div>
                <div class="input-wrapper">
                    <input type="text" name="" placeholder="Jurusan">
                </div>
                <div class="input-wrapper">
                    <input type="text" name="" placeholder="Fakultas">
                </div>
                <div class="input-wrapper">
                    <input type="text" name="" placeholder="Email">
                </div>
            </div>
            <div class="col-sm-6">
                <textarea class="input-wrapper" name="" id="" cols="50" rows="10"
                    placeholder="Education"></textarea>
                <div class="input-wrapper">
                    <input type="text" placeholder="Link Sinta">
                </div>
            </div>
        </div>
        <div class="button-wrapper">
            <button class="btn-prime">Save</button>
        </div>
    </form>
</div> -->
@endsection
