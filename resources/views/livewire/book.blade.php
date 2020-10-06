<div>
    <table class="table">
        <thead class="thead-dark">
          <tr>
            <th scope="col">#</th>
            <th scope="col">Cover</th>
            <th scope="col">Title</th>
            <th scope="col">Publisher</th>
            <th scope="col">Author</th>
            <th scope="col">Stock</th>
            <th scope="col">Action</th>
          </tr>
        </thead>
        <tbody>
            <?php $i = 1; ?>
            @foreach ($books as $book)
                <tr>
                    <th class="align-middle" scope="row">{{ $i++ }}</th>
                    <td class="align-middle">
                        <img src="https://ui-avatars.com/api/?background=0D8ABC&color=fff&name={{ $book->title }}" alt="">
                    </td>
                    <td class="align-middle">
                        <a href="" wire:click="show({{ $book->id }})" class="text-dark" style="text-decoration: none" data-toggle="modal" data-target="#exampleModal">{{ $book->title }}</a>
                    </td>
                    <td class="align-middle">{{ $book->publisher }}</td>
                    <td class="align-middle">{{ $book->author }}</td>
                    <td class="align-middle">{{ $book->stock }}</td>
                    <td class="align-middle">
                        <a href="#" class="btn btn-success btn-sm">Edit</a>
                        {{-- <a href="{{ route('books.delete', $book->id) }}" class="btn btn-danger btn-sm" onclick="event.preventDefault(); onDelete()">Delete</a> --}}
                        <form id="btnDelete" action="{{ route('books.delete', $book->id) }}" method="post" onsubmit="onDelete(event); return true" class="d-inline">
                            @csrf
                            @method('delete')
                            <button type="submit" class="btn btn-danger btn-sm ">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    <!-- Modal -->
    <div wire:ignore.self class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">{{ $title }}</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="card mb-3">
                        <div class="row no-gutters">
                          <div class="col-md-4">
                            <img src="https://ui-avatars.com/api/?size=500&background=0D8ABC&color=fff&name={{ $title }}" class="card-img" alt="{{ $title }}">
                          </div>
                          <div class="col-md-8">
                            <div class="card-body">
                              <h5 class="card-title">{{ $title }}</h5>
                              <small class="text-muted">{{ $author }} &middot; {{ $year }} | {{ $publisher }}</small>
                              <p class="card-text">
                                {{ $category }}  &middot;
                                @foreach ($bookshelves as $bookshelf)
                                    @if ($bookshelf->name)
                                          |  {{ $bookshelf->name }} 
                                    @endif
                                @endforeach
                              </p>
                              <p class="card-text">{{ $isbn }}</p>
                              <small class="text-muted">Stock: {{ $stock }}</small>
                            </div>
                          </div>
                        </div>
                      </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
</div>