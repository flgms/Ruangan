<?php

namespace App\Http\Controllers;

use App\Models\Room;
use Illuminate\Http\Request;

class RoomController extends Controller
{
    // Tampilkan semua ruangan
    public function index()
    {
        $rooms = Room::all();
        return view('rooms.index', compact('rooms'));
    }

    // Tampilkan form tambah
    public function create()
    {
        return view('rooms.create');
    }

    // Simpan data baru
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'nullable|string',
            'capacity' => 'required|integer|min:1',
        ]);

        Room::create($request->only(['name', 'description', 'capacity']));

        return redirect()->route('rooms.index')->with('success', 'Ruangan berhasil ditambahkan!');
    }

    // Tampilkan form edit
    public function edit(Room $room)
    {
        return view('rooms.edit', compact('room'));
    }

    // Update data ruangan
    public function update(Request $request, Room $room)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'nullable|string',
            'capacity' => 'required|integer|min:1',
        ]);

        $room->update($request->only(['name', 'description', 'capacity']));

        return redirect()->route('rooms.index')->with('success', 'Ruangan berhasil diperbarui!');
    }

    // Hapus ruangan
    public function destroy(Room $room)
    {
        $room->delete();

        return redirect()->route('rooms.index')->with('success', 'Ruangan berhasil dihapus!');
    }
}