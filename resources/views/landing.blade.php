@extends('layouts.app')

@push('structured_data')
<script type="application/ld+json">
{
    "@@context": "https://schema.org",
    "@@graph": [
        {
            "@@type": "WebSite",
            "@@id": "{{ config('app.url') }}/#website",
            "url": "{{ config('app.url') }}",
            "name": "Notion Rescue",
            "description": "Fixed-scope, 4-week Notion workspace cleanup, reorganization, and optimization service by Notion Providers.",
            "publisher": { "@@id": "{{ config('app.url') }}/#organization" }
        },
        {
            "@@type": "Organization",
            "@@id": "{{ config('app.url') }}/#organization",
            "name": "Notion Providers",
            "url": "https://www.notionproviders.com",
            "logo": {
                "@@type": "ImageObject",
                "url": "{{ asset('images/NP-wide-3x-close.png') }}"
            },
            "email": "info@notionproviders.com",
            "sameAs": [
                "https://www.notionproviders.com"
            ]
        },
        {
            "@@type": "Service",
            "@@id": "{{ config('app.url') }}/#service",
            "name": "Notion Rescue",
            "description": "A fixed-scope, 4-week Notion workspace cleanup, reorganization, and optimization engagement. Includes full workspace audit, database consolidation, personal dashboards, team access setup, and consulting calls.",
            "provider": { "@@id": "{{ config('app.url') }}/#organization" },
            "serviceType": "Notion Workspace Optimization",
            "areaServed": "Worldwide",
            "hasOfferCatalog": {
                "@@type": "OfferCatalog",
                "name": "Notion Rescue Package",
                "itemListElement": [
                    {
                        "@@type": "Offer",
                        "itemOffered": {
                            "@@type": "Service",
                            "name": "Notion Rescue — 4-Week Workspace Cleanup"
                        }
                    }
                ]
            }
        },
        {
            "@@type": "WebPage",
            "@@id": "{{ url()->current() }}/#webpage",
            "url": "{{ url()->current() }}",
            "name": "Notion Rescue — 4-Week Workspace Cleanup & Optimization | Notion Providers",
            "isPartOf": { "@@id": "{{ config('app.url') }}/#website" },
            "about": { "@@id": "{{ config('app.url') }}/#service" },
            "description": "Notion Rescue is a fixed-scope, 4-week Notion workspace cleanup, reorganization, and optimization service. Hands-on expert help to get your workspace working again.",
            "breadcrumb": { "@@id": "{{ url()->current() }}/#breadcrumb" }
        },
        {
            "@@type": "BreadcrumbList",
            "@@id": "{{ url()->current() }}/#breadcrumb",
            "itemListElement": [
                {
                    "@@type": "ListItem",
                    "position": 1,
                    "name": "Home",
                    "item": "{{ config('app.url') }}"
                }
            ]
        }
    ]
}
</script>
@endpush

@section('content')

{{-- ========== NAVBAR ========== --}}
<header id="navbar" class="fixed top-0 left-0 right-0 z-50 bg-surface-950/95 backdrop-blur-xl border-b border-surface-700">
    <nav aria-label="Main navigation" class="max-w-7xl mx-auto px-6 h-18 flex items-center justify-between py-4">
        <a href="https://www.notionproviders.com" class="flex items-center group" target="_blank" rel="noopener">
            <img src="{{ asset('images/NP-wide-3x-close.png') }}" alt="Notion Providers — Notion consulting and workspace optimization" class="h-12 w-auto opacity-90 group-hover:opacity-100 transition-opacity">
        </a>
        <div class="hidden md:flex items-center gap-8">
            <a href="#problem" class="text-sm font-medium text-white/70 hover:text-primary-400 transition-colors">The Reason</a>
            <a href="#how-it-works" class="text-sm font-medium text-white/70 hover:text-primary-400 transition-colors">How It Works</a>
            <a href="#whats-included" class="text-sm font-medium text-white/70 hover:text-primary-400 transition-colors">What's Included</a>
            <a href="#guarantee" class="text-sm font-medium text-white/70 hover:text-primary-400 transition-colors">Guarantee</a>
            <a href="https://calendly.com/d/cvt9-wh4-73p/notion-rescue-discovery" target="_blank" rel="noopener" class="px-5 py-2.5 bg-primary-500 text-white text-sm font-semibold rounded-sm hover:bg-primary-400 transition-all hover:shadow-lg hover:shadow-primary-500/20 active:scale-95">
                Book a Call
            </a>
        </div>
        <button id="mobile-toggle" class="md:hidden p-2 text-white/70 hover:text-primary-400 transition-colors" aria-label="Toggle menu">
            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"/></svg>
        </button>
    </nav>
    <div id="mobile-menu" class="md:hidden hidden bg-surface-900/95 backdrop-blur-xl border-t border-surface-700">
        <div class="px-6 py-4 flex flex-col gap-3">
            <a href="#problem" class="text-sm font-medium text-white/70 hover:text-primary-400 transition-colors py-2">The Reason</a>
            <a href="#how-it-works" class="text-sm font-medium text-white/70 hover:text-primary-400 transition-colors py-2">How It Works</a>
            <a href="#whats-included" class="text-sm font-medium text-white/70 hover:text-primary-400 transition-colors py-2">What's Included</a>
            <a href="#guarantee" class="text-sm font-medium text-white/70 hover:text-primary-400 transition-colors py-2">Guarantee</a>
            <a href="https://calendly.com/d/cvt9-wh4-73p/notion-rescue-discovery" target="_blank" rel="noopener" class="mt-2 px-5 py-2.5 bg-primary-500 text-white text-sm font-semibold rounded-sm text-center hover:bg-primary-400 transition-all">
                Book a Call
            </a>
        </div>
    </div>
</header>

<main id="main-content">

{{-- ========== HERO ========== --}}
<section class="relative min-h-screen flex items-center justify-center overflow-hidden pt-18">
    <div class="absolute inset-0 -z-10">
        <div class="absolute inset-0 bg-gradient-to-b from-surface-950 to-surface-900"></div>
        <div class="absolute top-0 right-0 w-[600px] h-[600px] bg-primary-500/[0.06] rounded-full blur-3xl"></div>
        <div class="absolute bottom-0 left-0 w-[400px] h-[400px] bg-primary-600/[0.04] rounded-full blur-3xl"></div>
        <div class="absolute inset-0 opacity-[0.03] dot-grid"></div>
    </div>

    <div class="max-w-7xl mx-auto px-6 py-20 md:py-32">
        <div class="max-w-4xl mx-auto text-center">
            <div class="animate-fade-in-up">
                <span class="inline-flex items-center gap-2 px-4 py-1.5 rounded-full bg-primary-500/15 text-primary-400 text-xs font-semibold mb-8 border border-primary-500/25">
                    <span class="w-1.5 h-1.5 rounded-full bg-primary-500 animate-pulse"></span>
                    Limited Availability &mdash; Fixed-Scope, 4-Week Engagement
                </span>
            </div>

            <h1 class="animate-fade-in-up delay-100 text-4xl sm:text-5xl md:text-7xl font-extrabold tracking-normal !leading-[1.25] mb-8">
                <span class="text-white">Is Your Notion Workspace </span>
                <span class="text-white">Working </span>
                <span class="text-primary-500">Against You?</span>
            </h1>

            <p class="animate-fade-in-up delay-200 text-lg md:text-xl text-white/70 max-w-2xl mx-auto mb-10 leading-relaxed">
                Pages pile up, databases duplicate, and nobody can find anything.
                <span class="font-semibold text-primary-400">Notion Rescue</span>
                is a 4-week engagement that cleans up and optimizes your existing workspace with a focused rescue plan and actionable support.
            </p>

            <div class="animate-fade-in-up delay-300 flex flex-col sm:flex-row gap-4 justify-center">
                <a href="https://calendly.com/d/cvt9-wh4-73p/notion-rescue-discovery" target="_blank" rel="noopener" class="group inline-flex items-center justify-center gap-2 px-8 py-4 bg-primary-500 text-white font-semibold rounded-sm hover:bg-primary-400 transition-all hover:shadow-xl hover:shadow-primary-500/20 active:scale-[0.98]">
                    Book Your Discovery Call
                    <svg class="w-4 h-4 group-hover:translate-x-0.5 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/></svg>
                </a>
                <a href="#how-it-works" class="group inline-flex items-center justify-center gap-2 px-8 py-4 bg-surface-700 text-white font-semibold rounded-sm hover:bg-surface-600 border border-surface-600 transition-all active:scale-[0.98]">
                    See How It Works
                </a>
            </div>
        </div>

        <div class="animate-fade-in-up delay-500 mt-20 grid grid-cols-2 md:grid-cols-4 gap-6 md:gap-8 max-w-3xl mx-auto">
            <div class="text-center">
                <div class="text-2xl md:text-3xl font-extrabold text-primary-500">4 Weeks</div>
                <div class="text-xs md:text-sm text-white/50 mt-1 font-medium">Fixed Timeline</div>
            </div>
            <div class="text-center">
                <div class="text-2xl md:text-3xl font-extrabold text-primary-500">100%</div>
                <div class="text-xs md:text-sm text-white/50 mt-1 font-medium">Scope Guaranteed</div>
            </div>
            <div class="text-center">
                <div class="text-2xl md:text-3xl font-extrabold text-primary-500">Hands-On</div>
                <div class="text-xs md:text-sm text-white/50 mt-1 font-medium">Expert Execution</div>
            </div>
            <div class="text-center">
                <div class="text-2xl md:text-3xl font-extrabold text-primary-500">Certified</div>
                <div class="text-xs md:text-sm text-white/50 mt-1 font-medium">Notion Consultants</div>
            </div>
        </div>
    </div>
</section>

{{-- ========== PAIN POINTS ========== --}}
<section id="problem" class="py-24 md:py-32 bg-surface-900 relative overflow-hidden">
    <div class="absolute inset-0 -z-0">
        <div class="absolute top-0 left-1/4 w-[500px] h-[500px] bg-primary-500/[0.04] rounded-full blur-3xl"></div>
    </div>

    <div class="max-w-7xl mx-auto px-6 relative z-10">
        <div class="text-center mb-20">
            <span class="inline-block px-4 py-1.5 rounded-full bg-primary-500/15 text-primary-400 text-xs font-semibold mb-5 border border-primary-500/25">
                Sound Familiar?
            </span>
            <h2 class="text-3xl md:text-5xl font-extrabold tracking-normal !leading-[1.25] mb-6 text-white">
                Your Workspace Started Great.<br>
                <span class="text-primary-500">Then It Didn't.</span>
            </h2>
            <p class="text-white/60 max-w-2xl mx-auto text-lg">
                Most Notion workspaces start with good intentions but lose structure over time. Here's what goes wrong.
            </p>
        </div>

        <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
            @php
                $pains = [
                    ['icon' => '<svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10"/></svg>', 'title' => 'Pages Keep Piling Up', 'desc' => 'New pages created daily with no structure. Nobody knows where anything lives and important docs get buried under layers of clutter.'],
                    ['icon' => '<svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M8 16H6a2 2 0 01-2-2V6a2 2 0 012-2h8a2 2 0 012 2v2m-6 12h8a2 2 0 002-2v-8a2 2 0 00-2-2h-8a2 2 0 00-2 2v8a2 2 0 002 2z"/></svg>', 'title' => 'Duplicate Databases Everywhere', 'desc' => 'The same data lives in three different places. Nobody knows which version is correct, and syncing them manually wastes hours.'],
                    ['icon' => '<svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M9.172 16.172a4 4 0 015.656 0M9 10h.01M15 10h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>', 'title' => 'Navigation Is a Nightmare', 'desc' => 'Clicking through five levels of nested pages just to find a meeting note. Your sidebar has become an endless scroll of confusion.'],
                    ['icon' => '<svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>', 'title' => 'Wasting Time Instead of Saving It', 'desc' => 'Notion was supposed to make you faster. Instead, your team spends more time searching for information than actually using it.'],
                    ['icon' => '<svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z"/></svg>', 'title' => 'Access Is All Over the Place', 'desc' => 'Sensitive information visible to the wrong people. Team members can accidentally edit or delete critical content without clear boundaries.'],
                    ['icon' => '<svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M18.364 18.364A9 9 0 005.636 5.636m12.728 12.728A9 9 0 015.636 5.636m12.728 12.728L5.636 5.636"/></svg>', 'title' => 'No One Wants to Fix It', 'desc' => 'The workspace is too messy to reorganize on your own. You don\'t have time, the team doesn\'t have the expertise, and the problem keeps growing.'],
                ];
            @endphp

            @foreach($pains as $pain)
                <div class="group relative p-8 rounded-sm bg-surface-800 border border-surface-700 hover:border-primary-500/30 transition-all duration-300">
                    <div class="w-12 h-12 rounded-sm bg-primary-500/15 flex items-center justify-center mb-5 text-primary-500">
                        {!! $pain['icon'] !!}
                    </div>
                    <h3 class="text-lg font-bold mb-3 text-white">{{ $pain['title'] }}</h3>
                    <p class="text-sm text-white/60 leading-loose">{{ $pain['desc'] }}</p>
                </div>
            @endforeach
        </div>
    </div>
</section>

{{-- ========== SOLUTION INTRO ========== --}}
<section class="py-24 md:py-32 bg-surface-950 relative overflow-hidden">
    <div class="absolute inset-0 -z-0">
        <div class="absolute bottom-0 right-1/4 w-[400px] h-[400px] bg-primary-600/[0.04] rounded-full blur-3xl"></div>
    </div>

    <div class="max-w-7xl mx-auto px-6 relative z-10">
        <span class="inline-block px-4 py-1.5 rounded-full bg-primary-500/15 text-primary-400 text-xs font-semibold mb-8 border border-primary-500/25">
            The Solution
        </span>
        <div class="grid lg:grid-cols-2 gap-16 items-start">
            <div>
                <h2 class="text-3xl md:text-[2.25rem] lg:text-[2.75rem] font-extrabold tracking-normal !leading-[1.25] mb-6">
                    <span class="text-primary-500">Notion Rescue:</span><br>
                    <span class="text-white">A Complete Workspace Turnaround&nbsp;in&nbsp;4&nbsp;Weeks</span>
                </h2>
                <p class="text-white/70 text-lg leading-relaxed mb-8">
                    Notion Rescue combines hands-on backend work with structured consulting over four weeks. We audit your current setup, reorganize your content, build personal dashboards, set up collaboration-ready access, and fine-tune every detail based on real feedback.
                </p>
                <p class="text-white/70 text-lg leading-relaxed">
                    The scope is defined upfront so you know exactly what to expect from start to finish. No open-ended timelines. No vague deliverables. This is a workspace cleanup and optimization &mdash; not a full team implementation. 
                    <br><br>                    
                    For larger builds, inquire about our <a href="https://www.notionproviders.com/contact-us/" target="_blank" rel="noopener" class="text-primary-400 hover:text-primary-300 transition-colors underline underline-offset-4">custom implementation services</a>.
                </p>
            </div>

            <div class="space-y-3">
                @php
                    $benefits = [
                        'Full workspace audit and cleanup',
                        'Database consolidation and restructuring',
                        'Personal dashboards for key users',
                        'Team access and collaboration setup',
                        'Knowledge base and SOP structure',
                        'Ongoing consulting calls throughout',
                        'Client portal with all deliverables',
                        'Defined scope with guaranteed completion',
                    ];
                @endphp

                @foreach($benefits as $benefit)
                    <div class="flex items-center gap-4 p-4 rounded-sm bg-surface-800 border border-surface-700">
                        <div class="w-6 h-6 rounded-full bg-primary-500/15 flex items-center justify-center flex-shrink-0">
                            <svg class="w-3.5 h-3.5 text-primary-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M5 13l4 4L19 7"/></svg>
                        </div>
                        <span class="text-white/90 text-sm font-medium">{{ $benefit }}</span>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</section>

{{-- ========== CTA DIVIDER ========== --}}
<div class="pt-2 pb-12 bg-surface-950 text-center">
    <a href="https://calendly.com/d/cvt9-wh4-73p/notion-rescue-discovery" target="_blank" rel="noopener" class="group inline-flex items-center justify-center gap-2 px-8 py-4 bg-primary-500 text-white font-semibold rounded-sm hover:bg-primary-400 transition-all hover:shadow-xl hover:shadow-primary-500/20 active:scale-[0.98]">
        Book Your Discovery Call
        <svg class="w-4 h-4 group-hover:translate-x-0.5 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/></svg>
    </a>
    <p class="mt-4 text-white/40 text-sm">No commitment required. Let's see if it's a fit.</p>
</div>

{{-- ========== HOW IT WORKS (Timeline) ========== --}}
<section id="how-it-works" class="py-24 md:py-32 bg-surface-900">
    <div class="max-w-7xl mx-auto px-6">
        <div class="text-center mb-20">
            <span class="inline-block px-4 py-1.5 rounded-full bg-primary-500/15 text-primary-400 text-xs font-semibold mb-5 border border-primary-500/25">
                The Process
            </span>
            <h2 class="text-3xl md:text-5xl font-extrabold tracking-normal !leading-[1.25] mb-6 text-white">
                4 Weeks to a Workspace<br>
                <span class="text-primary-500">That Feels Renewed</span>
            </h2>
            <p class="text-white/60 max-w-2xl mx-auto text-lg">
                A structured, week-by-week approach that gets results without disrupting your workflow.
            </p>
        </div>

        <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-6">
            @php
                $weeks = [
                    [
                        'week' => '1',
                        'title' => 'Day in the Life',
                        'subtitle' => 'Observe & Document',
                        'desc' => 'We conduct a kickoff call, gain access to your workspace, and perform a full audit. We map workflows, identify pain points, and document every structural gap — without making any changes.',
                        'color' => 'from-primary-500/20 to-primary-700/10',
                    ],
                    [
                        'week' => '2',
                        'title' => 'Reorganize & Tune Up',
                        'subtitle' => 'Clean & Restructure',
                        'desc' => 'With findings confirmed, we consolidate databases, restructure page hierarchy, set up breadcrumb-friendly navigation, archive unused content, and begin building hub pages with filtered views.',
                        'color' => 'from-primary-500/25 to-primary-600/10',
                    ],
                    [
                        'week' => '3',
                        'title' => 'Tweak & Optimize',
                        'subtitle' => 'Dashboards & Access',
                        'desc' => 'Personal dashboards are built for primary users. We set up team spaces and role-based views, refine database properties, configure collaboration-ready access, and integrate your knowledge base structure.',
                        'color' => 'from-primary-400/25 to-primary-600/10',
                    ],
                    [
                        'week' => '4',
                        'title' => 'Refine with Feedback',
                        'subtitle' => 'Polish & Deliver',
                        'desc' => 'We review the full workspace with you, adjust layouts and configurations based on feedback, finalize user access, and deliver everything through your dedicated client portal.',
                        'color' => 'from-primary-400/30 to-primary-500/10',
                    ],
                ];
            @endphp

            @foreach($weeks as $week)
                <div class="relative p-8 rounded-sm bg-surface-800 border border-surface-700 hover:border-primary-500/30 transition-all duration-300 flex flex-col">
                    <div class="absolute top-0 left-0 right-0 h-1 rounded-t-sm bg-gradient-to-r {{ $week['color'] }}"></div>
                    <div class="w-12 h-12 rounded-sm bg-gradient-to-br {{ $week['color'] }} flex items-center justify-center mb-5">
                        <span class="text-primary-400 font-extrabold text-lg">{{ $week['week'] }}</span>
                    </div>
                    <h3 class="text-lg font-bold mb-1 text-white">{{ $week['title'] }}</h3>
                    <p class="text-primary-400 text-xs font-semibold mb-3 uppercase tracking-wider">{{ $week['subtitle'] }}</p>
                    <p class="text-sm text-white/60 leading-loose flex-grow">{{ $week['desc'] }}</p>
                </div>
            @endforeach
        </div>
    </div>
</section>

{{-- ========== WHAT'S INCLUDED (Detailed) ========== --}}
<section id="whats-included" class="py-24 md:py-32 bg-surface-950 relative overflow-hidden">
    <div class="absolute inset-0 -z-0">
        <div class="absolute top-1/4 right-0 w-[500px] h-[500px] bg-primary-500/[0.04] rounded-full blur-3xl"></div>
        <div class="absolute bottom-0 left-1/4 w-[300px] h-[300px] bg-primary-600/[0.03] rounded-full blur-3xl"></div>
    </div>

    <div class="max-w-7xl mx-auto px-6 relative z-10">
        <div class="text-center mb-20">
            <span class="inline-block px-4 py-1.5 rounded-full bg-primary-500/15 text-primary-400 text-xs font-semibold mb-5 border border-primary-500/25">
                Full Breakdown
            </span>
            <h2 class="text-3xl md:text-5xl font-extrabold tracking-normal !leading-[1.25] mb-6 text-white">
                Everything That's <span class="text-primary-500">Included</span>
            </h2>
            <p class="text-white/60 max-w-2xl mx-auto text-lg">
                Here's exactly what happens each week so there are zero surprises.
            </p>
        </div>

        <div class="grid lg:grid-cols-2 gap-8">
            @php
                $details = [
                    [
                        'week' => 'Week 1',
                        'title' => 'Day in the Life',
                        'items' => [
                            'Kickoff call to align on goals and expectations',
                            'Full workspace access granted',
                            'Complete audit of existing pages, databases, and content',
                            'Current workflow mapping and pain point identification',
                            'Documentation of navigation issues and structural gaps',
                            'No changes made — observe only',
                        ]
                    ],
                    [
                        'week' => 'Week 2',
                        'title' => 'Reorganize & Tune Up',
                        'items' => [
                            'Alignment call to review findings and confirm priorities',
                            'Database consolidation and cleanup',
                            'Page hierarchy and navigation restructuring',
                            'Breadcrumb-friendly organization setup',
                            'Unused content removal and archiving',
                            'Hub pages with inline databases and filtered views',
                        ]
                    ],
                    [
                        'week' => 'Week 3',
                        'title' => 'Tweak & Optimize',
                        'items' => [
                            'Personal dashboards for primary users',
                            'Collaboration access and sharing settings configuration',
                            'Team spaces and role-based views setup',
                            'Database properties, filters, and layout refinement',
                            'Knowledge base structure for SOPs and team resources',
                        ]
                    ],
                    [
                        'week' => 'Week 4',
                        'title' => 'Refine with Feedback',
                        'items' => [
                            'Full workspace review with the client',
                            'Layout, view, and configuration adjustments',
                            'Access and collaboration structure finalization',
                            'Resource packet delivery through client portal',
                            'Final confirmation that everything is working',
                        ]
                    ],
                ];
            @endphp

            @foreach($details as $detail)
                <div class="p-8 rounded-sm bg-surface-800 border border-surface-700 hover:border-primary-500/25 transition-all duration-300">
                    <div class="flex items-center gap-3 mb-5">
                        <span class="px-3 py-1 rounded-sm bg-primary-500/15 text-primary-400 text-xs font-bold uppercase tracking-wider">{{ $detail['week'] }}</span>
                        <h3 class="text-lg font-bold text-white">{{ $detail['title'] }}</h3>
                    </div>
                    <ul class="space-y-4">
                        @foreach($detail['items'] as $item)
                            <li class="flex items-start gap-3 text-sm text-white/65">
                                <div class="w-5 h-5 rounded-full bg-primary-500/15 flex items-center justify-center flex-shrink-0 mt-0.5">
                                    <svg class="w-3 h-3 text-primary-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M5 13l4 4L19 7"/></svg>
                                </div>
                                {{ $item }}
                            </li>
                        @endforeach
                    </ul>
                </div>
            @endforeach
        </div>
    </div>
</section>

{{-- ========== CTA DIVIDER ========== --}}
<div class="pt-2 pb-12 bg-surface-950 text-center">
    <a href="https://calendly.com/d/cvt9-wh4-73p/notion-rescue-discovery" target="_blank" rel="noopener" class="group inline-flex items-center justify-center gap-2 px-8 py-4 bg-primary-500 text-white font-semibold rounded-sm hover:bg-primary-400 transition-all hover:shadow-xl hover:shadow-primary-500/20 active:scale-[0.98]">
        Book Your Discovery Call
        <svg class="w-4 h-4 group-hover:translate-x-0.5 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/></svg>
    </a>
    <p class="mt-4 text-white/40 text-sm">No commitment required. Let's see if it's a fit.</p>
</div>

{{-- ========== BONUSES ========== --}}
<section class="py-24 md:py-32 bg-surface-900">
    <div class="max-w-7xl mx-auto px-6">
        <div class="text-center mb-20">
            <span class="inline-block px-4 py-1.5 rounded-full bg-primary-500/15 text-primary-400 text-xs font-semibold mb-5 border border-primary-500/25">
                Included Bonuses
            </span>
            <h2 class="text-3xl md:text-5xl font-extrabold tracking-normal !leading-[1.25] mb-6 text-white">
                More Value, <span class="text-primary-500">No Extra Cost</span>
            </h2>
            <p class="text-white/60 max-w-2xl mx-auto text-lg">
                Every Notion Rescue engagement comes with these bonuses at no additional charge.
            </p>
        </div>

        <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-6">
            @php
                $bonuses = [
                    ['icon' => '<svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"/></svg>', 'title' => 'Dedicated Client Portal', 'desc' => 'All resources, deliverables, and documentation in one organized portal you can access anytime.'],
                    ['icon' => '<svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z"/></svg>', 'title' => 'Open Communication', 'desc' => 'Direct channel for questions and updates between scheduled calls. Never feel left in the dark.'],
                    ['icon' => '<svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M15 10l4.553-2.276A1 1 0 0121 8.618v6.764a1 1 0 01-1.447.894L15 14M5 18h8a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v8a2 2 0 002 2z"/></svg>', 'title' => 'Consulting Calls', 'desc' => 'Structured consulting calls throughout the engagement to review progress and align on priorities.'],
                    ['icon' => '<svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M9 20l-5.447-2.724A1 1 0 013 16.382V5.618a1 1 0 011.447-.894L9 7m0 13l6-3m-6 3V7m6 10l5.447 2.724A1 1 0 0021 18.382V7.618a1 1 0 00-.553-.894L15 4m0 13V4m0 0L9 7"/></svg>', 'title' => 'Workspace Map', 'desc' => 'A complete document mapping your final system layout so you always know how everything connects.'],
                ];
            @endphp

            @foreach($bonuses as $bonus)
                <div class="p-8 rounded-sm bg-surface-800 border border-surface-700 hover:border-primary-500/30 transition-all duration-300 h-full">
                    <div class="w-12 h-12 rounded-sm bg-primary-500/15 flex items-center justify-center mb-5 text-primary-500">
                        {!! $bonus['icon'] !!}
                    </div>
                    <h3 class="text-lg font-bold mb-3 text-white">{{ $bonus['title'] }}</h3>
                    <p class="text-sm text-white/60 leading-loose">{{ $bonus['desc'] }}</p>
                </div>
            @endforeach
        </div>
    </div>
</section>

{{-- ========== CTA DIVIDER ========== --}}
<div class="pt-2 pb-12 bg-surface-900 text-center">
    <a href="https://calendly.com/d/cvt9-wh4-73p/notion-rescue-discovery" target="_blank" rel="noopener" class="group inline-flex items-center justify-center gap-2 px-8 py-4 bg-primary-500 text-white font-semibold rounded-sm hover:bg-primary-400 transition-all hover:shadow-xl hover:shadow-primary-500/20 active:scale-[0.98]">
        Book Your Discovery Call
        <svg class="w-4 h-4 group-hover:translate-x-0.5 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/></svg>
    </a>
    <p class="mt-4 text-white/40 text-sm">No commitment required. Let's see if it's a fit.</p>
</div>

{{-- ========== AUTHORITY / SOCIAL PROOF ========== --}}
<section class="py-24 md:py-32 bg-surface-950 relative overflow-hidden">
    <div class="absolute inset-0 -z-0">
        <div class="absolute top-0 right-1/3 w-[500px] h-[500px] bg-primary-500/[0.04] rounded-full blur-3xl"></div>
    </div>

    <div class="max-w-7xl mx-auto px-6 relative z-10">
        <div class="text-center mb-16">
            <span class="inline-block px-4 py-1.5 rounded-full bg-primary-500/15 text-primary-400 text-xs font-semibold mb-6 border border-primary-500/25">
                Why Notion Providers
            </span>
            <h2 class="text-3xl md:text-5xl font-extrabold tracking-normal !leading-[1.25] mb-6">
                <span class="text-primary-500">Certified Experts.</span><br>
                <span class="text-white">Official Notion Partners.</span>
            </h2>
            <p class="text-white/60 text-lg max-w-2xl mx-auto leading-relaxed">
                Notion Rescue is led by certified Notion consultants who build and maintain operational workspaces every day — not generalists who picked up Notion last month.
            </p>
        </div>

        <div class="relative rounded-sm overflow-hidden">
            <div class="relative bg-surface-800 border border-surface-700 rounded-sm">
                <div class="grid lg:grid-cols-5 gap-0">

                    {{-- Left: Professional Photo --}}
                    <div class="lg:col-span-2 relative">
                        <img src="{{ asset('images/brad-hubbard.jpg') }}" alt="Bradley Hubbard — Notion Certified Consultant and founder of Notion Providers" class="w-full h-full object-cover object-center min-h-[320px] lg:min-h-full" loading="lazy">
                        <div class="absolute bottom-0 inset-x-0 bg-gradient-to-t from-surface-900/90 to-transparent p-6 lg:p-8">
                            <p class="text-white font-bold text-lg">Bradley Hubbard</p>
                            <p class="text-white/60 text-sm">Founder, Notion Providers</p>
                        </div>
                    </div>

                    {{-- Right: Credentials + Badge --}}
                    <div class="lg:col-span-3 p-8 md:p-12 lg:p-16 flex flex-col justify-center">
                        <div class="space-y-4 mb-8">
                            @php
                                $credentials = [
                                    'Notion Certified Consulting Partner',
                                    'Official Notion Partner — verified by Notion',
                                    'Hundreds of workspace builds and rescues completed',
                                    'Systems built for CRM, PM, finance, and team collaboration',
                                    'Dedicated team working inside Notion daily',
                                ];
                            @endphp

                            @foreach($credentials as $cred)
                                <div class="flex items-center gap-3 text-sm text-white/90">
                                    <div class="w-5 h-5 rounded-full bg-primary-500/15 flex items-center justify-center flex-shrink-0">
                                        <svg class="w-3 h-3 text-primary-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M5 13l4 4L19 7"/></svg>
                                    </div>
                                    {{ $cred }}
                                </div>
                            @endforeach
                        </div>

                        <p class="text-white/60 text-sm leading-relaxed mb-8">
                            Notion Providers designs and maintains operational workspaces across industries — from startups to established teams. We don't just know Notion; we live in it, building systems for project management, knowledge bases, finance tracking, and everything in between.
                        </p>

                        <div class="space-y-5">
                            <a href="https://www.notionproviders.com/services/" target="_blank" rel="noopener" class="inline-block text-sm text-primary-400 hover:text-primary-300 transition-colors underline underline-offset-4">
                                Learn more about our services &rarr;
                            </a>
                            <img src="{{ asset('images/brads-credentials-banner-left-to-right.png') }}" alt="Bradley Hubbard credentials: Notion Consulting Partner, Notion Certified Admin, Make Advanced and multiple certifications" class="w-full max-w-sm h-auto" loading="lazy">
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</section>

{{-- ========== WHO THIS IS FOR ========== --}}
<section class="py-24 md:py-32 bg-surface-900">
    <div class="max-w-7xl mx-auto px-6">
        <div class="text-center mb-20">
            <span class="inline-block px-4 py-1.5 rounded-full bg-primary-500/15 text-primary-400 text-xs font-semibold mb-5 border border-primary-500/25">
                Is This for You?
            </span>
            <h2 class="text-3xl md:text-5xl font-extrabold tracking-normal !leading-[1.25] mb-6 text-white">
                Who Notion Rescue Is <span class="text-primary-500">Built For</span>
            </h2>
        </div>

        <div class="grid lg:grid-cols-2 gap-8 max-w-5xl mx-auto">
            <div class="p-8 rounded-sm bg-surface-800 border border-primary-500/25">
                <h3 class="text-lg font-bold text-primary-400 mb-6 flex items-center gap-2">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg>
                    Great Fit
                </h3>
                <ul class="space-y-4">
                    @php
                        $goodFits = [
                            'Existing Notion users with a workspace that has grown disorganized over time',
                            'Teams or individuals who know the basics but need expert help structuring their setup',
                            'Businesses that want a fixed-scope engagement without ongoing commitments',
                        ];
                    @endphp
                    @foreach($goodFits as $fit)
                        <li class="flex items-start gap-3 text-sm text-white/80">
                            <div class="w-5 h-5 rounded-full bg-primary-500/15 flex items-center justify-center flex-shrink-0 mt-0.5">
                                <svg class="w-3 h-3 text-primary-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M5 13l4 4L19 7"/></svg>
                            </div>
                            {{ $fit }}
                        </li>
                    @endforeach
                </ul>
            </div>

            <div class="p-8 rounded-sm bg-surface-800 border border-surface-700">
                <h3 class="text-lg font-bold text-white/50 mb-6 flex items-center gap-2">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/></svg>
                    Not the Right Fit
                </h3>
                <ul class="space-y-4">
                    @php
                        $badFits = [
                            'Clients who need a full workspace build from scratch',
                            'Full team implementation or multi-month rollout projects',
                            'Teams not currently using Notion at all',
                        ];
                    @endphp
                    @foreach($badFits as $fit)
                        <li class="flex items-start gap-3 text-sm text-white/50">
                            <div class="w-5 h-5 rounded-full bg-surface-700 flex items-center justify-center flex-shrink-0 mt-0.5">
                                <svg class="w-3 h-3 text-white/40" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M6 18L18 6M6 6l12 12"/></svg>
                            </div>
                            {{ $fit }}
                        </li>
                    @endforeach
                </ul>
                <div class="mt-6 pt-5 border-t border-surface-700">
                    <p class="text-sm text-white/50 leading-relaxed">
                        Need a full team implementation or custom workspace build?
                        <a href="https://www.notionproviders.com/contact-us/" target="_blank" rel="noopener" class="text-primary-400 hover:text-primary-300 transition-colors underline underline-offset-4">Inquire about a custom implementation here</a>.
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>

{{-- ========== GUARANTEE ========== --}}
<section id="guarantee" class="py-24 md:py-32 bg-surface-950 relative overflow-hidden">
    <div class="absolute inset-0 -z-0">
        <div class="absolute bottom-0 left-1/3 w-[400px] h-[400px] bg-primary-600/[0.03] rounded-full blur-3xl"></div>
    </div>

    <div class="max-w-4xl mx-auto px-6 relative z-10 text-center">
        <div class="p-10 md:p-16 rounded-sm bg-surface-800 border border-primary-500/25">
            <div class="w-16 h-16 rounded-sm bg-primary-500/15 flex items-center justify-center mx-auto mb-8">
                <svg class="w-8 h-8 text-primary-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"/></svg>
            </div>
            <h2 class="text-3xl md:text-4xl font-extrabold tracking-normal !leading-[1.25] mb-6 text-white">
                Our <span class="text-primary-500">Scope Guarantee</span>
            </h2>
            <p class="text-white/70 text-lg leading-relaxed max-w-2xl mx-auto mb-4">
                We commit to delivering a cleaner, more functional workspace by the end of four weeks. If the agreed scope is not completed, we will continue working until it is fulfilled at no additional cost.
            </p>
            <p class="text-white/70 text-lg leading-relaxed max-w-2xl mx-auto">
                All deliverables are documented and accessible through your client portal.
            </p>
        </div>
    </div>
</section>

{{-- ========== FINAL CTA ========== --}}
<section id="book" class="py-24 md:py-32 bg-surface-900">
    <div class="max-w-7xl mx-auto px-6">
        <div class="relative rounded-sm overflow-hidden">
            <div class="relative px-8 py-16 md:px-16 md:py-24 bg-surface-800 border border-surface-700 rounded-sm text-center">
                <span class="inline-flex items-center gap-2 px-4 py-1.5 rounded-full bg-primary-500/15 text-primary-400 text-xs font-semibold mb-6 border border-primary-500/25">
                    <span class="w-1.5 h-1.5 rounded-full bg-primary-500 animate-pulse"></span>
                    Discounted Packaged Offer
                </span>

                <h2 class="text-3xl md:text-5xl font-extrabold tracking-normal !leading-[1.25] mb-6">
                    <span class="text-white">Ready to Rescue</span><br>
                    <span class="text-primary-500">Your Workspace?</span>
                </h2>

                <p class="text-white/70 text-lg max-w-2xl mx-auto mb-10 leading-relaxed">
                    Schedule a discovery call and let's talk about what your workspace needs. If it's a fit, we'll define the scope, sign the agreement, and start within the week. If you need a full team implementation instead, let us know on the form and we'll discuss a custom engagement.
                </p>

                <div class="max-w-md mx-auto mb-12">
                    <div class="space-y-4 text-left mb-8">
                        @php
                            $steps = [
                                'Schedule a discovery call to discuss workspace needs',
                                'Review and sign the service agreement',
                                'Submit the initial deposit to begin',
                                'Attend the kickoff call — work starts the following week',
                            ];
                        @endphp
                        @foreach($steps as $i => $step)
                            <div class="flex items-start gap-4">
                                <div class="w-8 h-8 rounded-full bg-primary-500/15 flex items-center justify-center flex-shrink-0 mt-0.5">
                                    <span class="text-primary-400 font-bold text-sm">{{ $i + 1 }}</span>
                                </div>
                                <p class="text-white/80 text-sm leading-relaxed pt-1">{{ $step }}</p>
                            </div>
                        @endforeach
                    </div>
                </div>

                <div class="flex flex-col sm:flex-row gap-4 justify-center">
                    <a href="https://calendly.com/d/cvt9-wh4-73p/notion-rescue-discovery" target="_blank" rel="noopener" class="group inline-flex items-center justify-center gap-2 px-10 py-5 bg-primary-500 text-white font-semibold rounded-sm text-lg hover:bg-primary-400 transition-all hover:shadow-xl hover:shadow-primary-500/20 active:scale-[0.98]">
                        Book Your Discovery Call
                        <svg class="w-5 h-5 group-hover:translate-x-0.5 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/></svg>
                    </a>
                </div>

                <p class="mt-6 text-white/40 text-sm">
                    No commitment required. Let's see if it's a fit.
                </p>
            </div>
        </div>
    </div>
</section>

</main>

{{-- ========== FOOTER ========== --}}
<footer role="contentinfo" class="bg-surface-950 text-white border-t border-surface-700">
    <div class="max-w-7xl mx-auto px-6 py-16">
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-12">
            <div class="lg:col-span-2">
                <a href="https://www.notionproviders.com" target="_blank" rel="noopener" class="flex items-center mb-4">
                    <img src="{{ asset('images/NP-wide-3x-close.png') }}" alt="Notion Providers logo" loading="lazy" class="h-10 w-auto opacity-80 hover:opacity-100 transition-opacity">
                </a>
                <p class="text-white/50 text-sm leading-relaxed max-w-sm mb-6">
                    We build systems and provide support to transform how your business runs. Notion Rescue is our fixed-scope workspace cleanup service.
                </p>
                <a href="mailto:info@notionproviders.com" class="text-sm text-primary-500 hover:text-primary-400 transition-colors">
                    info@notionproviders.com
                </a>
            </div>

            <div>
                <h4 class="text-sm font-semibold mb-4 text-white">Quick Links</h4>
                <ul class="space-y-2.5">
                    <li><a href="#problem" class="text-sm text-white/50 hover:text-primary-400 transition-colors">The Reason</a></li>
                    <li><a href="#how-it-works" class="text-sm text-white/50 hover:text-primary-400 transition-colors">How It Works</a></li>
                    <li><a href="#whats-included" class="text-sm text-white/50 hover:text-primary-400 transition-colors">What's Included</a></li>
                    <li><a href="#guarantee" class="text-sm text-white/50 hover:text-primary-400 transition-colors">Guarantee</a></li>
                    <li><a href="#book" class="text-sm text-white/50 hover:text-primary-400 transition-colors">Book a Call</a></li>
                </ul>
            </div>

            <div>
                <h4 class="text-sm font-semibold mb-4 text-white">Company</h4>
                <ul class="space-y-2.5">
                    <li><a href="https://www.notionproviders.com/services/" target="_blank" rel="noopener" class="text-sm text-white/50 hover:text-primary-400 transition-colors">Services</a></li>
                    <li><a href="https://www.notionproviders.com/contact-us/" target="_blank" rel="noopener" class="text-sm text-white/50 hover:text-primary-400 transition-colors">Contact Us</a></li>
                    <li><a href="https://www.notionproviders.com/partners" target="_blank" rel="noopener" class="text-sm text-white/50 hover:text-primary-400 transition-colors">Partners</a></li>
                    <li><a href="https://catalog.notionproviders.com/" target="_blank" rel="noopener" class="text-sm text-white/50 hover:text-primary-400 transition-colors">Catalog</a></li>
                </ul>
            </div>
        </div>

        <div class="mt-16 pt-8 border-t border-surface-700 flex flex-col sm:flex-row justify-between items-center gap-4">
            <p class="text-xs text-white/40">
                &copy; {{ date('Y') }} Notion Providers. All rights reserved.
            </p>
            <div class="flex gap-6">
                <a href="https://www.notionproviders.com/privacy" target="_blank" rel="noopener" class="text-xs text-white/40 hover:text-white/70 transition-colors">Privacy Policy</a>
                <a href="https://www.notionproviders.com/terms-and-conditions/" target="_blank" rel="noopener" class="text-xs text-white/40 hover:text-white/70 transition-colors">Terms of Service</a>
            </div>
        </div>
    </div>
</footer>

@endsection

@section('scripts')
<script>
    const toggle = document.getElementById('mobile-toggle');
    const menu = document.getElementById('mobile-menu');
    toggle.addEventListener('click', () => {
        menu.classList.toggle('hidden');
    });

    menu.querySelectorAll('a').forEach(link => {
        link.addEventListener('click', () => menu.classList.add('hidden'));
    });

    const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.style.opacity = '1';
                entry.target.style.transform = 'translateY(0)';
            }
        });
    }, { threshold: 0.1, rootMargin: '0px 0px -50px 0px' });

    document.querySelectorAll('section > div > div, section > div > .grid > div').forEach(el => {
        if (!el.closest('.relative.rounded-sm')) {
            el.style.opacity = '0';
            el.style.transform = 'translateY(20px)';
            el.style.transition = 'opacity 0.6s ease-out, transform 0.6s ease-out';
            observer.observe(el);
        }
    });
</script>
@endsection
