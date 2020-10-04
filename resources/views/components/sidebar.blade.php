<div>
    <div class="mb-4">
        <div class="pl-2 text-secondary">Books</div>
        <div class="list-group">
            <a href="{{ route('books') }}" class="list-group-item list-group-item-action{{ request()->is('books') ? ' active' : '' }}">
                List Books
            </a>
            <a href="{{ route('books.create') }}" class="list-group-item list-group-item-action{{ request()->is('books/create') ? ' active' : '' }}">Create</a>
        </div>
    </div>
    <div class="mb-4">
        <div class="pl-2 text-secondary">Category</div>
        <div class="list-group">
            <a href="#" class="list-group-item list-group-item-action">
                List Category
            </a>
            <a href="#" class="list-group-item list-group-item-action">Create</a>
        </div>
    </div>
    <div class="mb-4">
        <div class="pl-2 text-secondary">Bookshelves</div>
        <div class="list-group">
            <a href="#" class="list-group-item list-group-item-action">
                List Bookshelves
            </a>
            <a href="#" class="list-group-item list-group-item-action">Create</a>
        </div>
    </div>
    <div class="mb-4">
        <div class="pl-2 text-secondary">Account</div>
        <div class="list-group">
            <a href="#" class="list-group-item list-group-item-action">
                Change Password
            </a>
            <a href="#" class="list-group-item list-group-item-action">Edit Profile</a>
            <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();" class="list-group-item list-group-item-action">Logout</a>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                @csrf
            </form>
        </div>
    </div>
</div>