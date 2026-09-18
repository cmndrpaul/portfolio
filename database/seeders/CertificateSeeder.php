<?php

namespace Database\Seeders;

use App\Models\Certificate;
use Illuminate\Database\Seeder;

class CertificateSeeder extends Seeder
{
    public function run(): void
    {
        $certificates = [
            [
                'title' => 'Deep Learning & Computer Vision with YOLO & OpenCV',
                'issuer' => 'DeepLearning.AI & OpenCV.org',
                'issued_date' => 'Nov 2024',
                'credential_id' => 'CV-88294-DLAI',
                'credential_url' => 'https://coursera.org/verify/CV-88294-DLAI',
                'image' => '/images/certs/cert-cv.jpg',
                'description' => 'Comprehensive specialization covering object detection (YOLOv8, YOLOv11), semantic segmentation, edge inference optimization, and PyTorch deep neural networks.',
                'skills' => ['Computer Vision', 'YOLOv11', 'OpenCV', 'PyTorch', 'Object Tracking'],
                'sort_order' => 1,
            ],
            [
                'title' => 'Full-Stack Web Engineering: Laravel, Next.js & Cloud',
                'issuer' => 'Meta / Coursera Professional Certificate',
                'issued_date' => 'Aug 2024',
                'credential_id' => 'META-FS-94021',
                'credential_url' => 'https://coursera.org/verify/META-FS-94021',
                'image' => '/images/certs/cert-fs.jpg',
                'description' => 'Advanced backend architectures, relational databases, REST & GraphQL APIs, caching layers, and front-end performance tuning.',
                'skills' => ['Laravel', 'PHP', 'Next.js', 'TypeScript', 'MySQL', 'API Design'],
                'sort_order' => 2,
            ],
            [
                'title' => 'Embedded Systems & IoT Architecture with ESP32',
                'issuer' => 'Arm Education / edX',
                'issued_date' => 'May 2024',
                'credential_id' => 'ARM-IOT-5112',
                'credential_url' => 'https://edx.org/verify/ARM-IOT-5112',
                'image' => '/images/certs/cert-iot.jpg',
                'description' => 'Sensor integration, MQTT / HTTP telemetry protocols, low-power sleep modes, RTOS multitasking, and edge computing on microcontrollers.',
                'skills' => ['ESP32', 'C++', 'FreeRTOS', 'MQTT', 'Hardware Prototyping'],
                'sort_order' => 3,
            ],
            [
                'title' => 'AWS Certified Cloud Practitioner (CLF-C02)',
                'issuer' => 'Amazon Web Services (AWS)',
                'issued_date' => 'Jan 2024',
                'credential_id' => 'AWS-00392817',
                'credential_url' => 'https://aws.amazon.com/verification',
                'image' => '/images/certs/cert-aws.jpg',
                'description' => 'Cloud computing fundamentals, security and compliance, core AWS compute, storage, networking, and serverless architectures.',
                'skills' => ['AWS EC2', 'S3', 'RDS', 'Lambda', 'Cloud Architecture'],
                'sort_order' => 4,
            ],
            [
                'title' => 'Regional AgriTech Hackathon — 1st Place Champion',
                'issuer' => 'Department of Agriculture & DOST',
                'issued_date' => 'Oct 2023',
                'credential_id' => 'AGRI-HACK-CHAMP-2023',
                'credential_url' => 'https://dost.gov.ph/hackathon-awards-2023',
                'image' => '/images/certs/cert-hack.jpg',
                'description' => 'Awarded 1st Place overall for the AgriTech Innovate crop disease computer vision mobile detector system among 45 regional university teams.',
                'skills' => ['Hackathon Champion', 'AI Innovation', 'Product Pitching', 'Rapid Prototyping'],
                'sort_order' => 5,
            ],
            [
                'title' => 'Cybersecurity Essentials & Network Defense',
                'issuer' => 'Cisco Networking Academy',
                'issued_date' => 'Jun 2023',
                'credential_id' => 'CISCO-CS-77182',
                'credential_url' => 'https://netacad.com/verify/CISCO-CS-77182',
                'image' => '/images/certs/cert-cisco.jpg',
                'description' => 'Network fundamentals, secure routing protocols, firewall rules, cryptography, and vulnerability mitigation strategies.',
                'skills' => ['Network Security', 'Firewalls', 'Routing', 'Threat Detection'],
                'sort_order' => 6,
            ],
        ];

        foreach ($certificates as $cert) {
            Certificate::updateOrCreate(['credential_id' => $cert['credential_id']], $cert);
        }
    }
}
