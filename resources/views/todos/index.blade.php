<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>todos List</title>
    <style>
       .todos-card {
    border: 1px solid #aaa;
    padding: 15px;
    margin: 10px;
    display: inline-block;
    width: 250px;
    background-color: #f9f9f9; /* Warna latar belakang dasar */
    border-radius: 8px; /* Membuat sudut sedikit melengkung */
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); /* Memberikan bayangan */
    transition: transform 0.3s ease, box-shadow 0.3s ease;
}

.todos-card:hover {
    transform: translateY(-5px);
    box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
}

.todos-card h4 {
    color: #333; /* Warna teks untuk judul */
    font-size: 18px;
    margin: 5px 0;
}

.todos-card p {
    font-size: 14px;
    color: #666; /* Warna teks deskripsi */
    margin: 5px 0;
}

/* Warna latar belakang untuk status "Completed" */
.todos-card p.completed-1 {
    background-color: #dff0d8; /* Hijau lembut untuk yang sudah selesai */
    color: #3c763d;
    font-weight: bold;
    padding: 5px;
    border-radius: 4px;
    display: inline-block;
}

.todos-card p.completed-0 {
    background-color: #f2dede; /* Merah lembut untuk yang belum selesai */
    color: #a94442;
    font-weight: bold;
    padding: 5px;
    border-radius: 4px;
    display: inline-block;
}

/* Warna latar belakang berbeda untuk setiap kartu (opsional) */
.todos-card:nth-child(odd) {
    background-color: #e8f0fe; /* Biru lembut */
}

.todos-card:nth-child(even) {
    background-color: #fff3cd; /* Kuning lembut */
}

    </style>
</head>
<body>
    <h1>todos List</h1>

    <div class="todos-list">
        @foreach ($todos as $todos)
            <div class="todos-card">
                <h4>{{ $todos['id'] }} </h4>
                <p><strong>Title:</strong> {{ $todos['title'] }}</p>
                <p><strong>Completed:</strong> {{ $todos['completed'] }}</p>
            </div>
        @endforeach
    </div>
</body>
</html>