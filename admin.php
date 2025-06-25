<?php
// Simple admin page to view contact submissions
$submissions = [];
$log_file = __DIR__ . '/contact_submissions.txt';

try {
    if (file_exists($log_file) && is_readable($log_file)) {
        $lines = file($log_file, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
        if ($lines !== false) {
            foreach ($lines as $line) {
                $decoded = json_decode($line, true);
                if ($decoded !== null) {
                    $submissions[] = $decoded;
                }
            }
            // Reverse to show newest first
            $submissions = array_reverse($submissions);
        }
    }
} catch (Exception $e) {
    // Silently handle errors
    $submissions = [];
}
?>
<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>إدارة الرسائل - موقع العروسي للرقية</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        'islamic-green': {
                            50: '#f0fdf4',
                            100: '#dcfce7',
                            500: '#22c55e',
                            600: '#16a34a',
                            800: '#166534'
                        },
                        'islamic-gold': {
                            50: '#fffbeb',
                            100: '#fef3c7',
                            500: '#f59e0b',
                            600: '#d97706',
                            800: '#92400e'
                        }
                    },
                    backgroundImage: {
                        'gradient-islamic': 'linear-gradient(135deg, #22c55e 0%, #f59e0b 100%)',
                        'gradient-islamic-green': 'linear-gradient(135deg, #22c55e 0%, #16a34a 100%)',
                        'gradient-islamic-gold': 'linear-gradient(135deg, #f59e0b 0%, #d97706 100%)'
                    }
                }
            }
        }
    </script>
    <link href="https://fonts.googleapis.com/css2?family=Amiri:wght@400;700&display=swap" rel="stylesheet">
    <style>
        .font-amiri { font-family: 'Amiri', serif; }
    </style>
</head>
<body class="bg-gray-50 font-amiri">
    <div class="container mx-auto px-4 py-8">
        <div class="bg-white rounded-2xl shadow-xl p-8">
            <div class="text-center mb-8">
                <h1 class="text-4xl font-bold text-islamic-green-800 mb-4">
                    إدارة الرسائل
                </h1>
                <p class="text-gray-600">
                    الرسائل المرسلة من موقع العروسي للرقية
                </p>
            </div>

            <?php if (empty($submissions)): ?>
                <div class="text-center py-12">
                    <div class="text-6xl mb-4">📭</div>
                    <h3 class="text-xl font-bold text-gray-600 mb-2">لا توجد رسائل بعد</h3>
                    <p class="text-gray-500">الرسائل المرسلة ستظهر هنا</p>
                </div>
            <?php else: ?>
                <div class="space-y-6">
                    <?php foreach ($submissions as $index => $submission): ?>
                        <div class="border border-gray-200 rounded-xl p-6 hover:shadow-lg transition-all duration-300">
                            <div class="flex justify-between items-start mb-4">
                                <div>
                                    <h3 class="text-xl font-bold text-islamic-green-800">
                                        <?php echo htmlspecialchars($submission['name']); ?>
                                    </h3>
                                    <p class="text-gray-500 text-sm">
                                        <?php echo htmlspecialchars($submission['timestamp']); ?>
                                    </p>
                                </div>
                                <span class="bg-islamic-gold-100 text-islamic-gold-800 px-3 py-1 rounded-full text-sm font-semibold">
                                    <?php echo htmlspecialchars($submission['type']); ?>
                                </span>
                            </div>
                            
                            <div class="grid md:grid-cols-2 gap-4 mb-4">
                                <div>
                                    <span class="font-semibold text-gray-700">رقم الهاتف:</span>
                                    <span class="text-gray-600"><?php echo htmlspecialchars($submission['phone']); ?></span>
                                </div>
                                <div>
                                    <span class="font-semibold text-gray-700">البريد الإلكتروني:</span>
                                    <span class="text-gray-600"><?php echo htmlspecialchars($submission['email']); ?></span>
                                </div>
                            </div>
                            
                            <div>
                                <span class="font-semibold text-gray-700">الرسالة:</span>
                                <p class="text-gray-600 mt-2 leading-relaxed">
                                    <?php echo nl2br(htmlspecialchars($submission['message'])); ?>
                                </p>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            <?php endif; ?>

            <div class="mt-8 text-center">
                <a href="index.php" class="bg-gradient-islamic text-white px-6 py-3 rounded-xl hover:shadow-lg transition-all duration-300 inline-block">
                    العودة للموقع الرئيسي
                </a>
            </div>
        </div>
    </div>
</body>
</html> 