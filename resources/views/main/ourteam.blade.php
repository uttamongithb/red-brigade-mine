			@include('includes.header')
<!-- header area start  -->

<!-- Breadcumb area start  -->
<section class="breadcumb-area breadcrumb-bg">
    <div class="container">
        <div class="row ">
            <div class="col-lg-12">
                <div class="breadcumb-inner">
                    <h2 class="title">Our Team</h2>
                    <ul class="page-list">
                        <li><a href="<?php  echo action('MainController@index')?>">Home</a></li>
                        <li>Our Team</li>
                    </ul>
                </div>

            </div>
        </div>
    </div>
</section>
<!-- Breadcumb area end  -->
<style>
.rb-team-wrapper {
    margin: 80px 0 20px;
    position: relative;
}

.rb-team-section {
    margin-bottom: 52px;
}

.rb-team-header {
    display: flex;
    align-items: center;
    justify-content: flex-start;
    gap: 14px;
    margin-bottom: 22px;
    padding-bottom: 10px;
    border-bottom: 2px solid rgba(255, 0, 0, 0.18);
}

.rb-team-title {
    margin: 0;
    font-size: 30px;
    line-height: 1.2;
    font-weight: 800;
    color: #212529;
    letter-spacing: 0.2px;
}

.rb-team-grid {
    display: grid;
    grid-template-columns: repeat(3, minmax(0, 1fr));
    gap: 24px;
}

.rb-member-card {
    position: relative;
    overflow: hidden;
    border-radius: 18px;
    padding: 28px 22px 30px;
    min-height: 430px;
    background:
        radial-gradient(circle at 20% 15%, rgba(255, 255, 255, 0.22), transparent 30%),
        linear-gradient(180deg, #3246c9 0%, #4a61ea 36%, #4f9ff0 72%, #67c8ef 100%);
    border: 0;
    box-shadow:
        0 18px 36px rgba(30, 56, 129, 0.28),
        0 1px 0 rgba(255, 255, 255, 0.16) inset,
        0 -1px 0 rgba(0, 0, 0, 0.08) inset;
    transition: transform 0.25s ease, box-shadow 0.25s ease, filter 0.25s ease;
    text-align: center;
    cursor: pointer;
}

.rb-member-card:before {
    display: none;
}

.rb-member-card:after {
    display: none;
}

.rb-member-card:hover {
    transform: translateY(-8px);
    filter: saturate(1.08);
    box-shadow:
    0 26px 48px rgba(25, 48, 112, 0.36),
    0 1px 0 rgba(255, 255, 255, 0.2) inset,
    0 -1px 0 rgba(0, 0, 0, 0.1) inset;
}

.rb-member-image {
    width: 170px;
    height: 170px;
    border-radius: 50%;
    object-fit: cover;
    border: 6px solid #ffffff;
    box-shadow: 0 12px 26px rgba(16, 44, 110, 0.28);
    margin: 0 auto 18px;
    background: #dce8ff;
    transition: transform 0.3s ease, box-shadow 0.3s ease;
}

.rb-member-card:hover .rb-member-image {
    transform: scale(1.03);
    box-shadow: 0 16px 32px rgba(16, 44, 110, 0.34);
}

.rb-member-name {
    margin: 0;
    font-size: 23px;
    line-height: 1.25;
    font-weight: 800;
    color: #ffffff;
    letter-spacing: 0;
    text-shadow: 0 1px 2px rgba(0, 0, 0, 0.18);
}

.rb-member-role {
    margin: 32px 0 0;
    padding-top: 30px;
    border-top: 1px solid rgba(255, 255, 255, 0.28);
    font-size: 15.5px;
    line-height: 1.35;
    color: #ffffff;
    font-weight: 700;
    text-shadow: 0 1px 2px rgba(0, 0, 0, 0.16);
}

@media (max-width: 991px) {
    .rb-team-grid {
        grid-template-columns: repeat(2, minmax(0, 1fr));
    }

    .rb-team-title {
        font-size: 26px;
    }

    .rb-member-image {
        width: 148px;
        height: 148px;
    }

    .rb-member-name {
        font-size: 21px;
    }

    .rb-member-role {
        font-size: 15px;
        padding-top: 24px;
    }
}

@media (max-width: 575px) {
    .rb-team-grid {
        grid-template-columns: 1fr;
        gap: 18px;
    }

    .rb-team-header {
        flex-direction: column;
        align-items: flex-start;
    }

    .rb-team-title {
        font-size: 23px;
    }

    .rb-member-card {
        min-height: 390px;
        padding: 24px 18px 28px;
    }

    .rb-member-image {
        width: 132px;
        height: 132px;
    }

    .rb-member-name {
        font-size: 20px;
    }

    .rb-member-role {
        font-size: 14px;
        padding-top: 22px;
        margin-top: 20px;
    }
}
</style>

@php
    $teamPlaceholder = URL::asset('uploads/img/404.png');

    $executiveTeam = [
        ['name' => 'Usha Vishwakarma', 'role' => 'Founder and Chief Managing Trustee', 'image' => 'https://redbrigade-lucknow.org/uploads/testimonial/sunshine-testimonial-176.JPG'],
        ['name' => 'Laxmi Vishwakarma', 'role' => 'Co-Founder and Secretary'],
        ['name' => 'Manshi Singh', 'role' => 'Trustee'],
        ['name' => 'Poonam Singh', 'role' => 'Trustee'],
        ['name' => 'Sangeeta Kumari', 'role' => 'Trustee'],
        ['name' => 'Shabina', 'role' => 'Trustee'],
        ['name' => 'Pratishtha Tiwari', 'role' => 'CEO'],
        ['name' => 'Annu Yadav', 'role' => 'Treasurer & Coordinator, Bal Manch'],
        ['name' => 'Pooja Vishwakarma', 'role' => 'Program Coordinator'],
        ['name' => 'Saloni Sharma', 'role' => 'Self-defence Trainer'],
    ];

    $advisoryTeam = [
        ['name' => 'Suniti Sachan', 'role' => 'Trustee and Legal Advisor'],
        ['name' => 'Renuka Tandon', 'role' => 'Advisor, Ex-FICCI FLO Lucknow Kanpur Chapter, works with women farmers'],
        ['name' => 'Rakhi Kishore', 'role' => 'Advisor, Women and Animal Activist'],
        ['name' => 'Jyoita Mondal', 'role' => 'Advisor, Trans-Gender Activist, Trans Gender Judge'],
        ['name' => 'Kumud Shrivastav', 'role' => 'Advisor and Counselor'],
        ['name' => 'To Be Announced', 'role' => 'Advisor'],
    ];

    $legalTeam = [
        ['name' => 'Nitin Mishra', 'role' => 'Legal Advisor'],
        ['name' => 'Azhar Faiz Khan', 'role' => 'Legal Advisor'],
        ['name' => 'Kamlesh Singh', 'role' => 'Legal Advisor, High Court'],
    ];
@endphp

<section class="rb-team-wrapper">
    <div class="container">
        <div class="rb-team-section">
            <div class="rb-team-header">
                <h3 class="rb-team-title">Executive Team</h3>
            </div>
            <div class="rb-team-grid">
                @foreach ($executiveTeam as $member)
                    <div class="rb-member-card">
                        <img src="{{ !empty($member['image']) ? $member['image'] : $teamPlaceholder }}" alt="{{ $member['name'] }}" class="rb-member-image" onerror="this.onerror=null;this.src='{{ $teamPlaceholder }}';">
                        <h4 class="rb-member-name">{{ $member['name'] }}</h4>
                        <p class="rb-member-role">{{ $member['role'] }}</p>
                    </div>
                @endforeach
            </div>
        </div>

        <div class="rb-team-section">
            <div class="rb-team-header">
                <h3 class="rb-team-title">Advisory Team</h3>
            </div>
            <div class="rb-team-grid">
                @foreach ($advisoryTeam as $member)
                    <div class="rb-member-card">
                        <img src="{{ $teamPlaceholder }}" alt="{{ $member['name'] }}" class="rb-member-image" onerror="this.onerror=null;this.src='{{ $teamPlaceholder }}';">
                        <h4 class="rb-member-name">{{ $member['name'] }}</h4>
                        <p class="rb-member-role">{{ $member['role'] }}</p>
                    </div>
                @endforeach
            </div>
        </div>

        <div class="rb-team-section">
            <div class="rb-team-header">
                <h3 class="rb-team-title">Legal Cell Team</h3>
            </div>
            <div class="rb-team-grid">
                @foreach ($legalTeam as $member)
                    <div class="rb-member-card">
                        <img src="{{ $teamPlaceholder }}" alt="{{ $member['name'] }}" class="rb-member-image" onerror="this.onerror=null;this.src='{{ $teamPlaceholder }}';">
                        <h4 class="rb-member-name">{{ $member['name'] }}</h4>
                        <p class="rb-member-role">{{ $member['role'] }}</p>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</section>
 

@include('includes.footer')