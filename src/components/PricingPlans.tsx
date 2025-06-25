import React from 'react';
import { Check, Video, Headphones, Crown, Star, Clock, Calendar } from 'lucide-react';

const PricingPlans = () => {
  const plans = [
    {
      name: 'الاستشارة الأساسية',
      price: '150',
      currency: 'درهم',
      duration: '45 دقيقة',
      icon: Video,
      description: 'جلسة استشارة فردية مع المختص',
      features: [
        'جلسة فيديو مباشرة 45 دقيقة',
        'تشخيص الحالة الروحية',
        'إرشادات شخصية للعلاج',
        'دعاء ورقية مباشرة',
        'متابعة لمدة أسبوع'
      ],
      popular: false,
      color: 'islamic-green'
    },
    {
      name: 'التسجيلات العلاجية',
      price: '200',
      currency: 'درهم',
      duration: 'حسب الحالة',
      icon: Headphones,
      description: 'تسجيلات صوتية مخصصة حسب حالتك الصحية',
      features: [
        'تسجيلات مخصصة لحالتك',
        'رقية شرعية كاملة',
        'أدعية وأذكار علاجية',
        'تعليمات الاستخدام',
        'دعم فني لمدة شهر'
      ],
      popular: false,
      color: 'islamic-gold'
    },
    {
      name: 'الباقة المتكاملة',
      price: '350',
      currency: 'درهم',
      duration: '60 دقيقة + تسجيلات',
      icon: Star,
      description: 'جلسة مطولة مع تسجيلات قرآنية',
      features: [
        'جلسة فيديو مباشرة 60 دقيقة',
        'رقية شرعية شاملة',
        'تسجيلات قرآنية عالية الجودة',
        'خطة علاجية مفصلة',
        'متابعة لمدة شهرين',
        'استشارات إضافية مجانية'
      ],
      popular: true,
      color: 'islamic-green'
    },
    {
      name: 'الباقة الماسية',
      price: '600',
      currency: 'درهم',
      duration: '3 أيام كاملة',
      icon: Crown,
      description: 'برنامج علاجي شامل ومتابعة مكثفة',
      features: [
        'جلستان فيديو في 3 أيام',
        'تسجيلات صوتية لأسبوع كامل',
        'رقية يومية مكثفة',
        'برنامج أذكار مخصص',
        'متابعة مباشرة 24/7',
        'ضمان النتائج',
        'خدمة VIP مميزة'
      ],
      popular: false,
      color: 'islamic-gold'
    }
  ];

  const getColorClasses = (color: string, popular: boolean) => {
    if (popular) {
      return {
        card: 'bg-gradient-to-br from-islamic-green-500 to-islamic-green-600 text-white transform scale-105',
        button: 'bg-white text-islamic-green-600 hover:bg-gray-100',
        badge: 'bg-islamic-gold-500 text-white'
      };
    }
    
    return color === 'islamic-gold' ? {
      card: 'bg-white border-2 border-islamic-gold-200 hover:border-islamic-gold-400',
      button: 'bg-gradient-to-r from-islamic-gold-500 to-islamic-gold-600 text-white hover:from-islamic-gold-600 hover:to-islamic-gold-700',
      badge: 'bg-islamic-gold-100 text-islamic-gold-800'
    } : {
      card: 'bg-white border-2 border-islamic-green-200 hover:border-islamic-green-400',
      button: 'bg-gradient-islamic text-white hover:shadow-lg',
      badge: 'bg-islamic-green-100 text-islamic-green-800'
    };
  };

  return (
    <section id="plans" className="py-20 bg-gradient-to-br from-islamic-green-50 to-islamic-gold-50">
      <div className="container mx-auto px-4">
        {/* Section Header */}
        <div className="text-center mb-16">
          <h2 className="text-4xl md:text-5xl font-bold text-islamic-green-800 mb-6 font-amiri">
            خطط العلاج المتاحة
          </h2>
          <div className="flex justify-center items-center mb-6">
            <div className="h-1 w-20 bg-gradient-islamic rounded-full mx-2"></div>
            <Star className="w-6 h-6 text-islamic-gold-500" />
            <div className="h-1 w-20 bg-gradient-islamic rounded-full mx-2"></div>
          </div>
          <p className="text-xl text-gray-600 max-w-3xl mx-auto leading-relaxed">
            اختر الخطة المناسبة لك من بين باقاتنا المتنوعة، كل باقة مصممة خصيصاً لتلبية احتياجاتك الروحية والعلاجية
          </p>
        </div>

        {/* Pricing Grid */}
        <div className="grid md:grid-cols-2 xl:grid-cols-4 gap-8 max-w-7xl mx-auto">
          {plans.map((plan, index) => {
            const colors = getColorClasses(plan.color, plan.popular);
            
            return (
              <div
                key={index}
                className={`${colors.card} rounded-3xl p-8 shadow-xl hover:shadow-2xl transition-all duration-300 relative overflow-hidden`}
              >
                {/* Popular Badge */}
                {plan.popular && (
                  <div className="absolute -top-2 -right-2 bg-islamic-gold-500 text-white px-6 py-2 rounded-full text-sm font-bold shadow-lg transform rotate-12">
                    الأكثر طلباً
                  </div>
                )}

                {/* Plan Header */}
                <div className="text-center mb-8">
                  <div className={`${plan.popular ? 'bg-white/20' : 'bg-gradient-islamic'} p-4 rounded-2xl w-fit mx-auto mb-6`}>
                    <plan.icon className={`w-8 h-8 ${plan.popular ? 'text-white' : 'text-white'}`} />
                  </div>
                  <h3 className={`text-2xl font-bold mb-2 ${plan.popular ? 'text-white' : 'text-islamic-green-800'}`}>
                    {plan.name}
                  </h3>
                  <p className={`${plan.popular ? 'text-white/90' : 'text-gray-600'} mb-4`}>
                    {plan.description}
                  </p>
                  
                  {/* Price */}
                  <div className="mb-4">
                    <span className={`text-4xl font-bold ${plan.popular ? 'text-white' : 'text-islamic-green-800'}`}>
                      {plan.price}
                    </span>
                    <span className={`text-lg ${plan.popular ? 'text-white/90' : 'text-gray-600'} mr-2`}>
                      {plan.currency}
                    </span>
                  </div>
                  
                  {/* Duration */}
                  <div className={`flex items-center justify-center space-x-2 space-x-reverse ${colors.badge} px-4 py-2 rounded-full text-sm font-semibold`}>
                    <Clock className="w-4 h-4" />
                    <span>{plan.duration}</span>
                  </div>
                </div>

                {/* Features */}
                <div className="space-y-4 mb-8">
                  {plan.features.map((feature, featureIndex) => (
                    <div key={featureIndex} className="flex items-start space-x-3 space-x-reverse">
                      <Check className={`w-5 h-5 mt-0.5 ${plan.popular ? 'text-white' : 'text-islamic-green-600'} flex-shrink-0`} />
                      <span className={`${plan.popular ? 'text-white/90' : 'text-gray-700'} leading-relaxed`}>
                        {feature}
                      </span>
                    </div>
                  ))}
                </div>

                {/* CTA Button */}
                <button className={`${colors.button} w-full py-4 rounded-2xl font-bold text-lg transition-all duration-300 transform hover:-translate-y-1 hover:shadow-lg`}>
                  احجز الآن
                </button>
              </div>
            );
          })}
        </div>

        {/* Additional Information */}
        <div className="mt-16 text-center">
          <div className="bg-white/80 backdrop-blur-sm rounded-2xl p-8 max-w-4xl mx-auto shadow-lg">
            <h3 className="text-2xl font-bold text-islamic-green-800 mb-4">
              معلومات مهمة
            </h3>
            <div className="grid md:grid-cols-3 gap-6 text-sm text-gray-600">
              <div className="flex items-center justify-center space-x-2 space-x-reverse">
                <Calendar className="w-5 h-5 text-islamic-green-600" />
                <span>مواعيد مرنة</span>
              </div>
              <div className="flex items-center justify-center space-x-2 space-x-reverse">
                <Check className="w-5 h-5 text-islamic-green-600" />
                <span>ضمان الجودة</span>
              </div>
              <div className="flex items-center justify-center space-x-2 space-x-reverse">
                <Star className="w-5 h-5 text-islamic-green-600" />
                <span>خدمة احترافية</span>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  );
};

export default PricingPlans;