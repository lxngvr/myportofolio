<?php

namespace Database\Seeders;

use App\Models\Profile;
use App\Models\Project;
use App\Models\ProfileFact;
use App\Models\SkillGroup;
use App\Models\SocialLink;
use App\Models\TimelineEntry;
use Illuminate\Database\Seeder;

/**
 * Mengisi database dengan data yang tadinya ada di blok CONFIG (portfolio.js).
 * Aman dijalankan ulang: tabel dikosongkan dulu.
 * Setelah panel admin ada, data ini diedit dari sana.
 */
class PortfolioSeeder extends Seeder
{
    public function run(): void
    {
        Profile::query()->delete();
        SocialLink::query()->delete();
        ProfileFact::query()->delete();
        TimelineEntry::query()->delete();
        SkillGroup::query()->delete(); // skills ikut terhapus (cascade)
        Project::query()->delete();

        Profile::create(['name' => 'Galang Dava Ramadhan', 'monogram' => 'GD', 'email' => 'galangdavaa@gmail.com']);

        $socials = [
            ['Email', 'galangdavaa@gmail.com', 'mailto:galangdavaa@gmail.com'],
            ['GitHub', '@lxngvr', 'https://github.com/lxngvr'],
            ['LinkedIn', 'in/galang-dava-ramadhan', 'https://www.linkedin.com/in/galang-dava-ramadhan'],
            ['Instagram', '@lxng_vr', 'https://www.instagram.com/lxng_vr'],
        ];
        foreach ($socials as $i => [$label, $handle, $url]) {
            SocialLink::create(['label' => $label, 'handle' => $handle, 'url' => $url, 'sort_order' => $i]);
        }

        $facts = [
            ['Interests', 'Listening to Music, Exploring Data, and Reading Literature'],
            ['Learning philosophy', 'If something can be done by a human, then we can do it too.'],
            ['Current focus', 'Exploring Machine Learning while deepening my knowledge of Data Engineering.'],
        ];
        foreach ($facts as $i => [$label, $value]) {
            ProfileFact::create(['label' => $label, 'value' => $value, 'sort_order' => $i]);
        }

        $items = [
            [
                'kind' => 'University',
                'title' => 'Informatics Engineering',
                'organization' => 'Sebelas April University',
                'period' => '2024 – Present',
                'description' => 'Currently studying Informatics with an interest in data science, machine learning, and data engineering. Actively developing technical skills through academic research, independent learning, and hands-on projects.',
                'tags' => ['Data Science', 'Databases', 'Statistics', 'Machine Learning', 'Data Engineering'],
            ],
            [
                'kind' => 'Vocational / High School',
                'title' => 'Software Engineering',
                'organization' => 'SMK Negeri 1 Sumedang',
                'period' => '2021 – 2024',
                'description' => '[Optional: the background that led you to Informatics.]',
                'tags' => ['Desktop Development', 'Software Development', 'Web Development', 'Programming Logic'],
            ],
        ];
        foreach ($items as $i => $item) {
            TimelineEntry::create($item + ['category' => 'education', 'sort_order' => $i]);
        }

        $items = [
            [
                'kind' => 'Training Program',
                'title' => 'Cohort Data Scientist',
                'organization' => 'Coding Camp powered by DBS Foundation',
                'period' => '2026',
                'description' => 'Completed the Data Scientist learning path, including technical learning modules, instructor-led sessions, weekly consultations, financial literacy, and a capstone project.',
                'tags' => ['Python', 'Data Science', 'Data Analysis', 'Machine Learning'],
            ],
            [
                'kind' => 'Machine Learning Project',
                'title' => 'Speech Disfluency Detection',
                'organization' => 'Academic Project',
                'period' => '2026',
                'description' => 'Worked on a machine learning project focused on detecting speech disfluencies, gaining practical experience in data processing and analysis.',
                'tags' => ['Machine Learning', 'Data Processing', 'Data Analysis'],
            ],
            [
                'kind' => 'Research',
                'title' => 'Website Usability Evaluation',
                'organization' => 'Sebelas April University',
                'period' => '2026',
                'description' => 'Evaluated the SIUTER UNSAP website using the Nielsen usability model and PLS-SEM to analyze survey data and examine factors influencing usability.',
                'tags' => ['PLS-SEM', 'SmartPLS', 'Usability Research', 'Data Analysis'],
            ],
            [
                'kind' => 'Mentorship',
                'title' => 'Front-End Development Mentor',
                'organization' => 'Tahungoding',
                'period' => '2025 – 2026',
                'description' => 'Supported front-end development learning through HTML, CSS, Bootstrap, and JavaScript DOM, while gaining experience in technical guidance and web development.',
                'tags' => ['HTML', 'CSS', 'Bootstrap', 'JavaScript', 'Web Development'],
            ],
        ];
        foreach ($items as $i => $item) {
            TimelineEntry::create($item + ['category' => 'experience', 'sort_order' => $i]);
        }

        $groups = [
            ['Programming Languages', '', ['SQL', 'Java', 'JavaScript', 'C#'], ['Python']],
            ['Data Science & Machine Learning', 'paper', ['pandas', 'NumPy', 'scikit-learn', 'Matplotlib', 'Jupyter'], ['PyTorch']],
            ['Data Engineering & Databases', 'dark', ['PostgreSQL', 'MySQL', 'Data Modeling', 'ETL Basics'], ['Apache Airflow']],
            ['Tools & Development Workflow', '', ['Git', 'GitHub', 'VS Code', 'Linux CLI'], ['Docker']],
        ];
        foreach ($groups as $i => [$name, $style, $items, $exploring]) {
            $group = SkillGroup::create(['name' => $name, 'style' => $style, 'sort_order' => $i]);
            foreach ($items as $n => $skill) {
                $group->skills()->create(['name' => $skill, 'sort_order' => $n]);
            }
            foreach ($exploring as $n => $skill) {
                $group->skills()->create(['name' => $skill, 'is_exploring' => true, 'sort_order' => 100 + $n]);
            }
        }

        // Contoh project dari template awal. Disembunyikan (is_published = false)
        // karena masih berisi teks dan URL placeholder. Isi dengan project asli,
        // lalu aktifkan.
        $projects = [
            [
                'type' => 'analysis',
                'thumb' => 'bars',
                'title' => 'Exploratory Analysis: [Dataset Name]',
                'description' => '[Describe the question you explored and the dataset you used.]',
                'contribution' => '[Cleaning, visualization, and interpreting the results.]',
                'url' => 'https://github.com/your-username/project-one',
                'repo_url' => 'https://github.com/your-username/project-one',
                'demo_url' => null,
                'is_dark' => false,
                'tags' => ['Python', 'pandas', 'Matplotlib'],
            ],
            [
                'type' => 'ml',
                'thumb' => 'scatter',
                'title' => 'Prediction Experiment: [Topic]',
                'description' => '[State the prediction problem and what you set out to compare.]',
                'contribution' => '[Feature engineering, model training, and evaluation.]',
                'url' => 'https://github.com/your-username/project-two',
                'repo_url' => 'https://github.com/your-username/project-two',
                'demo_url' => null,
                'is_dark' => true,
                'tags' => ['scikit-learn', 'Python', 'Jupyter'],
            ],
            [
                'type' => 'engineering',
                'thumb' => 'pipeline',
                'title' => 'Data Pipeline Practice: [Source to Destination]',
                'description' => '[Explain what raw data went in and how it was organized for analysis.]',
                'contribution' => '[Extraction, transformation, and loading steps you wrote.]',
                'url' => 'https://github.com/your-username/project-three',
                'repo_url' => 'https://github.com/your-username/project-three',
                'demo_url' => null,
                'is_dark' => false,
                'tags' => ['SQL', 'Python', 'PostgreSQL'],
            ],
            [
                'type' => 'web',
                'thumb' => 'browser',
                'title' => 'Academic Web Project: [App Name]',
                'description' => '[Describe who the app is for and the problem it solves.]',
                'contribution' => '[Interface, logic, and anything you built end to end.]',
                'url' => 'https://your-username.github.io/app-name',
                'repo_url' => 'https://github.com/your-username/project-four',
                'demo_url' => 'https://your-username.github.io/app-name',
                'is_dark' => true,
                'tags' => ['HTML', 'CSS', 'JavaScript'],
            ],
            [
                'type' => 'analysis',
                'thumb' => 'donut',
                'title' => 'Data Visualization: [Topic]',
                'description' => '[What story the data tells and who the visuals are for.]',
                'contribution' => '[Chart design, data preparation, and written findings.]',
                'url' => 'https://github.com/your-username/project-five',
                'repo_url' => 'https://github.com/your-username/project-five',
                'demo_url' => null,
                'is_dark' => false,
                'tags' => ['Python', 'Data Viz'],
            ],
            [
                'type' => 'ml',
                'thumb' => 'matrix',
                'title' => 'Classification Experiment: [Topic]',
                'description' => '[What you tried to classify and which approaches you compared.]',
                'contribution' => '[Preprocessing, model selection, and error analysis.]',
                'url' => 'https://github.com/your-username/project-six',
                'repo_url' => 'https://github.com/your-username/project-six',
                'demo_url' => null,
                'is_dark' => true,
                'tags' => ['Python', 'scikit-learn'],
            ],
        ];
        foreach ($projects as $i => $project) {
            Project::create($project + ['sort_order' => $i, 'is_published' => false]);
        }
    }
}
