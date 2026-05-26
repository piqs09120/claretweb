<?php

namespace Database\Seeders;

use App\Models\Program;
use Illuminate\Database\Seeder;

class ProgramSeeder extends Seeder
{
    public function run(): void
    {
        $programs = [
            [
                'name' => 'Bachelor of Science in Computer Science',
                'slug' => 'bs-computer-science',
                'description' => 'Master the art of problem-solving and software innovation. Our CS program focuses on deep computing theory, sophisticated algorithm design, and cutting-edge software engineering to prepare you for the frontiers of technology.',
                'degree_type' => 'Bachelor of Science',
                'duration' => '4 years',
                'is_active' => true,
                'sort_order' => 1,
                'curriculum_data' => [
                    ['year' => 1, 'semester' => 1, 'subjects' => ['Introduction to Computing', 'Mathematics in the Modern World', 'Purposive Communication', 'Understanding the Self', 'Physical Education 1']],
                    ['year' => 1, 'semester' => 2, 'subjects' => ['Computer Programming 1', 'Discrete Mathematics', 'Readings in Philippine History', 'Art Appreciation', 'Physical Education 2']],
                    ['year' => 2, 'semester' => 1, 'subjects' => ['Computer Programming 2', 'Data Structures and Algorithms', 'Computer Organization and Architecture', 'Science, Technology and Society', 'Physical Education 3']],
                    ['year' => 2, 'semester' => 2, 'subjects' => ['Object-Oriented Programming', 'Database Management Systems', 'Operating Systems', 'Ethics', 'Physical Education 4']],
                    ['year' => 3, 'semester' => 1, 'subjects' => ['Software Engineering', 'Computer Networks', 'Design and Analysis of Algorithms', 'Elective 1']],
                    ['year' => 3, 'semester' => 2, 'subjects' => ['Web Development', 'Artificial Intelligence', 'Human-Computer Interaction', 'Elective 2']],
                    ['year' => 4, 'semester' => 1, 'subjects' => ['Thesis Writing 1', 'Mobile Application Development', 'Cybersecurity', 'Elective 3']],
                    ['year' => 4, 'semester' => 2, 'subjects' => ['Thesis Writing 2', 'Practicum / On-the-Job Training', 'Professional Ethics in IT']],
                ],
            ],
            [
                'name' => 'Bachelor of Science in Information Technology',
                'slug' => 'bs-information-technology',
                'description' => 'Bridging the gap between technology and business. This program emphasizes practical systems administration, robust network security, and modern web infrastructure to transform you into a versatile IT professional.',
                'degree_type' => 'Bachelor of Science',
                'duration' => '4 years',
                'is_active' => true,
                'sort_order' => 2,
                'curriculum_data' => [
                    ['year' => 1, 'semester' => 1, 'subjects' => ['Introduction to Information Technology', 'Mathematics in the Modern World', 'Purposive Communication', 'Understanding the Self', 'Physical Education 1']],
                    ['year' => 1, 'semester' => 2, 'subjects' => ['Computer Programming 1', 'IT Infrastructure and Networking Basics', 'Readings in Philippine History', 'Art Appreciation', 'Physical Education 2']],
                    ['year' => 2, 'semester' => 1, 'subjects' => ['Computer Programming 2', 'Platform Technologies', 'Systems Analysis and Design', 'Science, Technology and Society', 'Physical Education 3']],
                    ['year' => 2, 'semester' => 2, 'subjects' => ['Database Administration', 'Network Administration', 'Web Systems and Technologies', 'Ethics', 'Physical Education 4']],
                    ['year' => 3, 'semester' => 1, 'subjects' => ['IT Project Management', 'Application Development', 'Information Assurance and Security', 'Elective 1']],
                    ['year' => 3, 'semester' => 2, 'subjects' => ['Systems Integration and Architecture', 'Open Source Technologies', 'Social and Professional Issues in IT', 'Elective 2']],
                    ['year' => 4, 'semester' => 1, 'subjects' => ['Capstone Project 1', 'Technopreneurship', 'Elective 3']],
                    ['year' => 4, 'semester' => 2, 'subjects' => ['Capstone Project 2', 'Practicum / On-the-Job Training']],
                ],
            ],
            [
                'name' => 'Bachelor of Secondary Education',
                'slug' => 'bachelor-secondary-education',
                'description' => 'Shaping the leaders of tomorrow. Our Education program integrates pedagogical excellence with deep subject expertise, producing compassionate and highly-skilled educators ready for the global classroom environment.',
                'degree_type' => 'Bachelor of Education',
                'duration' => '4 years',
                'is_active' => true,
                'sort_order' => 3,
                'curriculum_data' => [
                    ['year' => 1, 'semester' => 1, 'subjects' => ['The Child and Adolescent Learners', 'Mathematics in the Modern World', 'Purposive Communication', 'Understanding the Self', 'Physical Education 1']],
                    ['year' => 1, 'semester' => 2, 'subjects' => ['The Teaching Profession', 'Field Study 1 (Observation and Participation)', 'Science Technology and Society', 'Art Appreciation', 'Physical Education 2']],
                    ['year' => 2, 'semester' => 1, 'subjects' => ['The Social Dimensions of Education', 'Principles of Teaching 1', 'Major Subject 1', 'Physical Education 3']],
                    ['year' => 2, 'semester' => 2, 'subjects' => ['Assessment of Learning 1', 'Curriculum Development', 'Major Subject 2', 'Physical Education 4']],
                    ['year' => 3, 'semester' => 1, 'subjects' => ['Technology for Teaching and Learning', 'Assessment of Learning 2', 'Major Subject 3', 'Field Study 2']],
                    ['year' => 3, 'semester' => 2, 'subjects' => ['Facilitating Learning', 'Major Subject 4', 'Major Subject 5', 'Field Study 3']],
                    ['year' => 4, 'semester' => 1, 'subjects' => ['Major Subject 6', 'Major Subject 7', 'Practice Teaching (Pre-service)']],
                    ['year' => 4, 'semester' => 2, 'subjects' => ['Practice Teaching (Full)', 'Trends and Issues in Education']],
                ],
            ],
            [
                'name' => 'Bachelor of Science in Business Administration',
                'slug' => 'bs-business-administration',
                'description' => 'Master the dynamics of the global marketplace. We cultivate ethical business leaders through a comprehensive curriculum in strategic management, digital marketing, and disruptive financial strategies.',
                'degree_type' => 'Bachelor of Science',
                'duration' => '4 years',
                'is_active' => true,
                'sort_order' => 4,
                'curriculum_data' => [
                    ['year' => 1, 'semester' => 1, 'subjects' => ['Principles of Management', 'Mathematics in the Modern World', 'Purposive Communication', 'Understanding the Self', 'Physical Education 1']],
                    ['year' => 1, 'semester' => 2, 'subjects' => ['Principles of Marketing', 'Business Communication', 'Microeconomics', 'Art Appreciation', 'Physical Education 2']],
                    ['year' => 2, 'semester' => 1, 'subjects' => ['Financial Accounting', 'Macroeconomics', 'Business Law and Taxation', 'Science, Technology and Society', 'Physical Education 3']],
                    ['year' => 2, 'semester' => 2, 'subjects' => ['Managerial Accounting', 'Operations Management', 'Business Statistics', 'Ethics', 'Physical Education 4']],
                    ['year' => 3, 'semester' => 1, 'subjects' => ['Strategic Management', 'Entrepreneurship', 'Major Subject 1', 'Elective 1']],
                    ['year' => 3, 'semester' => 2, 'subjects' => ['Human Behavior in Organization', 'Research Methods in Business', 'Major Subject 2', 'Elective 2']],
                    ['year' => 4, 'semester' => 1, 'subjects' => ['Business Research 1', 'Major Subject 3', 'Major Subject 4']],
                    ['year' => 4, 'semester' => 2, 'subjects' => ['Business Research 2', 'Practicum / Internship']],
                ],
            ],
        ];

        foreach ($programs as $program) {
            Program::updateOrCreate(['slug' => $program['slug']], $program);
        }

        $this->command->info('Programs seeded successfully!');
    }
}
