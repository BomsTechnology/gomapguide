interface Plan {
    abbreviation: String;
    title: String;
    price: Number;
    period: String;
    popular: Boolean;
    bgcolor: Object;
    color: Object;
    infos: Array<String>;
}

const plans: Array<Plan> = [
    {
        abbreviation: "CG",
        title: "Conseil et Gestion",
        price: 59,
        period: "Mensuel",
        popular: false,
        bgcolor: { "background-color": "#3498db" },
        color: { color: "#3498db" },
        infos: [
            "Publicité sur les réseaux sociaux",
            "Mise à jour régulière des données Google My Business",
        ],
    },
    {
        abbreviation: "CDA",
        title: "Contrôles des Avis",
        price: 150,
        period: "Annuel",
        popular: false,
        bgcolor: { "background-color": "#e67e22" },
        color: { color: "#e67e22" },
        infos: [
            "Soyez le mieux noté et coté de votre secteur",
            "Gérez les avis indésirables",
            "Recevez plus d'avis positifs",
        ],
    },
    {
        abbreviation: "DSV",
        title: "Définition des Services",
        price: 180,
        period: "Annuel",
        popular: true,
        bgcolor: { "background-color": "#9b59b6" },
        color: { color: "#9b59b6" },
        infos: [
            "Listez entièrement vos produits sur Google",
            "Détaillez vos produits et services",
            "Montrez vos services et produits phares à vos clients",
        ],
    },
    {
        abbreviation: "REM",
        title: "Référencement et Maintenance",
        price: 389,
        period: "Une fois et à vie",
        popular: true,
        bgcolor: { "background-color": "#1abc9c" },
        color: { color: "#1abc9c" },
        infos: [
            "Mettez vous devant vos concurrents",
            "Soyez en tête des recherches",
            "Maintenance de votre profil",
        ],
    },
    {
        abbreviation: "SAG",
        title: "Sécurisation et Accès du Google My Business",
        price: 199,
        period: "Une fois et à vie",
        popular: false,
        bgcolor: { "background-color": "#e74c3c" },
        color: { color: "#e74c3c" },
        infos: [
            "Accédez à votre profil Google My Business",
            "Sécurisez votre profil",
            "Empêchez des modifications malveillantes",
        ],
    },
    {
        abbreviation: "AT",
        title: "Assistance Technique",
        price: 289,
        period: "Annuel",
        popular: false,
        bgcolor: { "background-color": "#e74c3c" },
        color: { color: "#e74c3c" },
        infos: [
            "Recevez des rapports mensuels de la part de votre technicien",
            "Assistance (12 mois)",
            "Sécurisation du profil",
            "Accédez à votre profil Google My Busness et Empêchez les modifications extérieures",
        ],
    },
    {
        abbreviation: "ROSG",
        title: "Référencement Optimal avec Sécurisation Garantie",
        price: 599,
        period: "valable 5 ans",
        popular: false,
        bgcolor: { "background-color": "#e74c3c" },
        color: { color: "#e74c3c" },
        infos: [
            "5 mots clés garantis",
            "Figurez dans le top 10 sur la première page",
            "Maintenance du profil (pendant 60 mois)",
            "Obtenez le QR code de votre compte publicitaire Facebook et jumelez le à votre Google My Business",
            "Contact direct et permanent avec votre technicien (IT)",
        ],
    },
];

export { plans };
export type { Plan };
