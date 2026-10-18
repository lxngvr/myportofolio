<?php

namespace App\Http\Controllers;

use App\Models\Profile;
use App\Models\Project;
use App\Models\ProfileFact;
use App\Models\SkillGroup;
use App\Models\SocialLink;
use App\Models\TimelineEntry;
use Illuminate\Contracts\View\View;

class PortfolioController extends Controller
{
    public function index(): View
    {
        return view('index', [
            // Fallback agar halaman tetap tampil sebelum seeder dijalankan.
            'profile' => Profile::first() ?? new Profile([
                'name' => 'Your Name',
                'monogram' => 'YN',
                'email' => 'your.name@email.com',
            ]),
            'facts' => ProfileFact::orderBy('sort_order')->get(),
            'socials' => SocialLink::orderBy('sort_order')->get(),
            'education' => TimelineEntry::published()->category(TimelineEntry::EDUCATION)->get(),
            'experience' => TimelineEntry::published()->category(TimelineEntry::EXPERIENCE)->get(),
            'skillGroups' => SkillGroup::with('skills')->orderBy('sort_order')->get(),
            'projects' => Project::published()->get(),
            'projectTypes' => Project::TYPES,
        ]);
    }
}
