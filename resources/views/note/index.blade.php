<x-app-layout>
    <div class="note-container py-12">
        <a href="{{ route('note.create') }}" class="new-note-btn">Create note</a>
        <div class="notes">
            @foreach ($notes as $note)
                <div class="note">
                    <div class="note-body">
                        {{ Str::words($note->note, 30) }}
                    </div>
                    <div class="note-buttons">
                        <a href="{{ route('note.show', $note) }}" class="note-edit-button">View</a>
                        <a href="{{ route('note.edit', $note) }}" class="note-edit-button">Edit</a>
                        <form action="{{ route('note.destroy', $note) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button class="note-delete-button" onclick="return confirm('Are you sure you want to delete this note?')">Delete</button>
                        </form>
                    </div>
                </div>
            @endforeach
        </div>
        <div class="p-6">
            {{ $notes->links() }}
        </div>
    </div>
</x-app-layout>
