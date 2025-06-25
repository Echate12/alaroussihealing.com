import React from 'react';
import { Book, Sparkles, Users, Award, CheckCircle, Heart } from 'lucide-react';

const About = () => {
  const benefits = [
    'الشفاء من الأمراض الروحية والنفسية',
    'التخلص من القلق والاكتئاب',
    'الحماية من العين والحسد والسحر',
    'تقوية الإيمان والصلة بالله',
    'الراحة النفسية والطمأنينة',
    'العلاج بالطرق الشرعية المعتمدة'
  ];

  const methods = [
    {
      icon: Book,
      title: 'القرآن الكريم',
      description: 'قراءة الآيات الكريمة والسور المباركة للعلاج والشفاء'
    },
    {
      icon: Sparkles,
      title: 'الأدعية المأثورة',
      description: 'الأدعية النبوية الصحيحة للحماية والعلاج'
    },
    {
      icon: Users,
      title: 'الإرشاد الروحي',
      description: 'التوجيه والإرشاد في ضوء الكتاب والسنة'
    },
    {
      icon: Award,
      title: 'الخبرة والتخصص',
      description: 'سنوات من الممارسة والدراسة في علوم الرقية'
    }
  ];

  return (
    <section id="about" className="py-20 bg-white">
      <div className="container mx-auto px-4">
        {/* Section Header */}
        <div className="text-center mb-16">
          <h2 className="text-4xl md:text-5xl font-bold text-islamic-green-800 mb-6 font-amiri">
            عن الرقية الشرعية
          </h2>
          <div className="flex justify-center items-center mb-6">
            <div className="h-1 w-20 bg-gradient-islamic rounded-full mx-2"></div>
            <Heart className="w-6 h-6 text-islamic-gold-500" />
            <div className="h-1 w-20 bg-gradient-islamic rounded-full mx-2"></div>
          </div>
          <p className="text-xl text-gray-600 max-w-3xl mx-auto leading-relaxed">
            الرقية الشرعية هي العلاج بالقرآن الكريم والأدعية المأثورة من السنة النبوية، 
            وهي طريقة شرعية معتمدة للشفاء من الأمراض الروحية والنفسية والجسدية
          </p>
        </div>

        {/* Main Content Grid */}
        <div className="grid lg:grid-cols-2 gap-16 mb-16">
          {/* Benefits Section */}
          <div className="animate-slide-up">
            <h3 className="text-3xl font-bold text-islamic-green-800 mb-8 font-amiri">
              فوائد الرقية الشرعية
            </h3>
            <div className="space-y-4">
              {benefits.map((benefit, index) => (
                <div key={index} className="flex items-start space-x-3 space-x-reverse group">
                  <CheckCircle className="w-6 h-6 text-islamic-green-600 mt-1 group-hover:scale-110 transition-transform duration-200" />
                  <p className="text-lg text-gray-700 leading-relaxed">{benefit}</p>
                </div>
              ))}
            </div>
          </div>

          {/* Importance Section */}
          <div className="animate-slide-up">
            <h3 className="text-3xl font-bold text-islamic-green-800 mb-8 font-amiri">
              أهمية الرقية في الإسلام
            </h3>
            <div className="bg-islamic-green-50 p-8 rounded-2xl border border-islamic-green-100">
              <div className="space-y-6">
                <p className="text-lg text-gray-700 leading-relaxed">
                  <span className="font-semibold text-islamic-green-800">الرقية الشرعية</span> 
                  مشروعة في الإسلام وقد مارسها النبي صلى الله عليه وسلم وأصحابه. 
                  وهي وسيلة للتداوي والاستشفاء بكلام الله تعالى.
                </p>
                <p className="text-lg text-gray-700 leading-relaxed">
                  قال تعالى: <span className="font-amiri text-islamic-green-800 font-bold">
                  "وَنُنَزِّلُ مِنَ الْقُرْآنِ مَا هُوَ شِفَاءٌ وَرَحْمَةٌ لِّلْمُؤْمِنِينَ"
                  </span>
                </p>
                <p className="text-lg text-gray-700 leading-relaxed">
                  وقال النبي صلى الله عليه وسلم: 
                  <span className="font-amiri text-islamic-green-800 font-bold">
                  "لا بأس بالرقى ما لم تكن شركاً"
                  </span>
                </p>
              </div>
            </div>
          </div>
        </div>

        {/* Methods Grid */}
        <div>
          <h3 className="text-3xl font-bold text-islamic-green-800 mb-12 text-center font-amiri">
            طرق العلاج المعتمدة
          </h3>
          <div className="grid md:grid-cols-2 lg:grid-cols-4 gap-8">
            {methods.map((method, index) => (
              <div
                key={index}
                className="bg-white p-8 rounded-2xl shadow-lg hover:shadow-xl transition-all duration-300 border border-gray-100 group hover:-translate-y-2"
              >
                <div className="bg-gradient-islamic p-4 rounded-2xl w-fit mx-auto mb-6 group-hover:scale-110 transition-transform duration-300">
                  <method.icon className="w-8 h-8 text-white" />
                </div>
                <h4 className="text-xl font-bold text-islamic-green-800 mb-4 text-center">
                  {method.title}
                </h4>
                <p className="text-gray-600 text-center leading-relaxed">
                  {method.description}
                </p>
              </div>
            ))}
          </div>
        </div>
      </div>
    </section>
  );
};

export default About;