<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Portfolio;
use Inertia\Inertia;

class PortfolioController extends Controller
{
    public function index() {
        return inertia('Portfolio/About');
    }

    public function portfolio() {
        $portfolio = Portfolio::orderBy('title')->get();
        return inertia('Portfolio/Portfolio', [
            'portfolio' => $portfolio
        ]);
    }

    public function add() {
        return inertia('Portfolio/Add');
    }

    public function store(Request $request) {
        $validatedData = $request->validate([
            'title' => 'required',
            'description' => 'required',
            'img' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048'
        ]);
    
        if ($request->hasFile('img')) {
            $image = $request->file('img');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('images'), $imageName);
            $validatedData['img'] = 'images/' . $imageName;
        }
    
        Portfolio::create($validatedData);
    
        return redirect('/portfolio');
    }

    public function destroy($id) {
        $portfolio = Portfolio::find($id);
        $portfolio->delete();
        return redirect('/portfolio');
    }

    // public function destroy(Request $request, $id) {
    //     // Find the portfolio item by ID
    //     $portfolio = Portfolio::find($id);
    
    //     // If the portfolio item exists
    //     if ($portfolio) {
    //         // Delete the image file from storage if it exists
    //         if ($portfolio->img) {
    //             // Assuming the images are stored in the public directory
    //             $imagePath = public_path($portfolio->img);
    //             if (file_exists($imagePath)) {
    //                 unlink($imagePath); // Delete the file from storage
    //             }
    //         }
    
    //         // Delete the portfolio item from the database
    //         $portfolio->delete();
    
    //         // Redirect or return a response as needed
    //         return redirect('/portfolio')->with('success', 'Portfolio item deleted successfully');
    //     } else {
    //         // Portfolio item not found, handle accordingly (e.g., redirect with error message)
    //         return redirect('/portfolio')->with('error', 'Portfolio item not found');
    //     }
    // }

}
