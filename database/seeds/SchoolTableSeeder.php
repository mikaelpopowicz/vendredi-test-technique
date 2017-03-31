<?php

use Illuminate\Database\Seeder;

class SchoolTableSeeder extends Seeder
{
    private $schoolNames = [
        "Institut national polytechnique de Toulouse (INPT)",
        "Université de Toulouse 3 - Paul Sabatier",
        "Institut national des sciences appliquées de Toulouse (INSA Toulouse)",
        "Université de technologie de Troyes (UTT)",
        "Université Montpellier 3 - Paul-Valéry  (UPV)",
        "Université fédérale de Toulouse Midi-Pyrénées",
        "École des métiers de l'environnement (EME)",
        "Languedoc-Roussillon Universités",
        "Université du Sud Toulon - Var  (USTV)",
        "Institut national universitaire Jean-François Champollion (INU Albi)",
        "École nationale des ponts et chaussées  (ENPC)",
        "École des hautes études en sciences sociales (EHESS)",
        "Université Paris 8 - Vincennes - Saint-Denis",
        "École nationale supérieure de mécanique et d'aérotechnique de Poitiers (ISAE-ENSMA)",
        "Université de Versailles Saint-Quentin-en-Yvelines",
        "Université Paris-Saclay",
        "École nationale supérieure Louis Lumière (ENSLL)",
        "École supérieure des techniques aéronautiques et de construction automobile ESTACA",
        "Université de Lorraine",
        "Université Jean Monnet",
        "Université d'Angers",
        "Université du Littoral Côte d'Opale (ULCO)",
        "École nationale supérieure des arts et industries textiles  (ENSAIT)",
        "École nationale vétérinaire, agroalimentaire et de l'alimentation, Nantes-Atlantique (ONIRIS)",
        "Université Grenoble Alpes",
        "Hautes études d'ingénieur (HEI)",
        "Groupe Institut supérieur d'agriculture de Lille (Isa)",
        "École supérieure de journalisme de Lille (ESJ)",
        "Université de Pau et des Pays de l'Adour (UPPA)",
        "Université Sorbonne Nouvelle - Paris 3",
        "École d'ingénieur de la ville de Paris  (EIVP)",
        "École nationale d'ingénieurs de Tarbes  (ENI Tarbes)",
        "École supérieure de chimie physique électronique de Lyon (CPE Lyon)",
        "SIGMA Clermont  (SIGMA)",
        "Institut d'enseignement supérieur et de recherche en alimentation, santé animale, sciences agronomiques et de l'environnement (Vet Agro Sup)",
        "École catholique des arts et métiers (ECAM)",
        "Haute École des arts du Rhin (HEAR)",
        "Université Paris Descartes",
        "Conservatoire national des arts et métiers  (CNAM)",
        "Université Paris Diderot",
        "École nationale des Chartes ENC",
        "École française d'Extrême-Orient (EFEO)",
        "École d'ingénieurs du monde numérique (ESIEA)",
        "Institut catholique de Paris (ICP)",
        "École nationale supérieure d'architecture de Paris-Malaquais (ENSAPB)",
        "Université de Corse Pasquale Paoli",
        "Université Paris-Est Créteil Val-de-Marne (UPEC)",
        "Université des Antilles",
        "École d'ingénieur d'agro-développement international (ISTOM)",
        "Université de Strasbourg",
        "Université de technologie de Compiègne  (UTC)",
        "École centrale de Lyon (EC Lyon)",
        "Université Jean Moulin - Lyon 3",
        "Institut national des sciences appliquées de Lyon (INSA Lyon)",
        "Université Lumière - Lyon 2",
        "Université Paris-Sorbonne",
        "Université de Valenciennes et du Hainaut-Cambrésis",
        "Université Panthéon-Assas",
        "Université Lille Nord de France",
        "Institut polytechnique LaSalle Beauvais Esitpa",
        "Université Pierre et Marie Curie (UPMC)",
        "École nationale supérieure d'arts et métiers (ENSAM)",
        "Observatoire de Paris",
        "Institut de physique du globe (IPG)",
        "Institut Mines-Télécom  (IMT)",
        "Institut de management et de communication interculturels (ISIT)",
        "Institut protestant de théologie (IPT)",
        "Institut national supérieur des sciences agronomiques, de l'alimentation et de l'environnement (Agrosup Dijon)",
        "Université de Nîmes (UNÎMES)",
        "École nationale vétérinaire de Toulouse (ENVT)",
        "École centrale de Marseille",
        "Institut national des sciences appliquées Centre Val de Loire (INSA CVL)",
        "École d'ingénieurs en génie des systèmes industriels (EIGSI)",
        "Université de Cergy-Pontoise",
        "École française de Rome (EFR)",
        "Institut français d'archéologie orientale du Caire  (IFAO)",
        "Université Paris-Seine",
        "Site Aix-Marseille-Provence-Méditerranée",
        "École centrale de Lille EC Lille",
        "Université François-Rabelais",
        "Université de Montpellier",
        "Institut d'études politiques de Grenoble (IEP de Grenoble)",
        "Skema Business School (Skema)",
        "École des hautes études commerciales du nord (Edhec)",
        "Institut d'études politiques de Rennes (IEP de Rennes)",
        "École nationale supérieure de chimie de Rennes  (ENS Chimie Rennes)",
        "ICN Business School (ICN)",
        "Université Bretagne Loire (UBL)",
        "Université Paris-Sud",
        "Université de Picardie Jules-Verne (UPJV)",
        "École nationale supérieure d'informatique pour l'industrie et l'entreprise  (ENSIIE)",
        "Institut supérieur de mécanique de Paris (Supméca)",
        "École nationale supérieure maritime (ENSM)",
        "Université Paris-Est (UPE)",
        "École internationale des sciences du traitement de l'information (EISTI)",
        "École d'architecture de la ville et des territoires à Marne-la-Vallée (ENSA VT)",
        "École d'ingénieur généraliste en informatique et technologies du numérique (EFREI)",
        "Institut supérieur de l'électronique et du numérique (Yncréa Méditerranée)",
        "Muséum national d'histoire naturelle (MNHN)",
        "Institut des sciences et industries du vivant et de l'environnement Agro Paris Tech",
        "Institut national des sciences appliquées de Rouen (INSA Rouen)",
        "Institut national du sport, de l'expertise et de la performance INSEP",
        "Collège de France",
        "Université de recherche Paris sciences et lettres - PSL Research University PSL",
        "École de management de Normandie (EM Normandie)",
        "Université Paris Lumières",
        "Université de Strasbourg",
        "Université d'Artois",
        "École nationale des travaux publics de l'État (ENTPE)",
        "École normale supérieure de Lyon (ENS de Lyon)",
        "Université de Savoie",
        "Institut d'études politiques de Lyon (IEP de Lyon)",
        "Institut textile et chimique (ITECH)",
        "Facultés Libres de Philosophie et de Psychologie (IPC)",
        "Observatoire de la côte d'azur (OCA)",
        "École supérieure d'ingénieurs des travaux de la construction de Caen (ESITC)",
        "Université Lille 3 - Charles-de-Gaulle",
        "Grenoble INP",
        "École supérieure des sciences commerciales d'Angers ESSCA",
        "Université de Bretagne-Sud (UBS)",
        "Université Lille 1 - Sciences technologies",
        "Université Rennes 2",
        "Institut d'études politiques de Lille (IEP de Lille)",
        "Institut supérieur de l'électronique et du numérique (Isen-Lille)",
        "École supérieure d'électronique de l'Ouest (ESEO)",
        "Institut d'économie scientifique et de gestion (Ieseg)",
        "École supérieure des sciences économiques et commerciales (Essec)",
        "ECAM-EPMI (ECAM-EPMI)",
        "Centre Universitaire de Mayotte CU de Mayotte",
        "Centre national d'enseignement à distance (CNED)",
        "Université de Bourgogne",
        "Université Toulouse - Jean Jaurès",
        "Université de La Rochelle",
        "Institut d'études politiques de Toulouse (IEP de Toulouse)",
        "Institut national des sciences appliquées de Rennes INSA Rennes",
        "Centre international d'études supérieures en sciences agronomiques (Montpellier Sup Agro)",
        "École nationale supérieure de chimie de Montpellier ENS Chimie Montpellier",
        "Université Bordeaux-Montaigne (UBM)",
        "Institut catholique de Toulouse ICT",
        "Institut supérieur de l'électronique et du numérique de Brest (Yncréa Ouest)",
        "Université de technologie de Belfort-Montbéliard (UTBM)",
        "Université Clermont Auvergne",
        "Picardie Universités",
        "Université de Reims Champagne-Ardenne (URCA)",
        "Université de Perpignan - Via Domitia",
        "Université de Grenoble Alpes (UGA)",
        "Université d'Orléans",
        "École des hautes études en santé publique (EHESP)",
        "Université Lille 2 - Droit et Santé",
        "Université de Bordeaux",
        "Institut national des sciences appliquées de Strasbourg INSA Strasbourg",
        "Université Clermont Auvergne (UCA)",
        "École supérieure de chimie organique et minérale (ESCOM)",
        "Aix-Marseille université (AMU)",
        "Université de Caen Normandie",
        "Université de Franche-Comté UFC",
        "École nationale d'ingénieurs de Brest (ENIB)",
        "Institut d'études politiques d'Aix-en-Provence (IEP d'Aix-en-Provence)",
        "Institut polytechnique de Bordeaux (IPB)",
        "École nationale supérieure de mécanique et des microtechniques (ENSMM Besançon)",
        "Université Côte d'Azur (UCA)",
        "Communauté d'universités et établissements d'Aquitaine",
        "Université d'Avignon et des Pays de Vaucluse",
        "Université Paris-Est Marne-la-Vallée (UPEM)",
        "Université de Poitiers",
        "Université de Limoges",
        "Université d'Évry-Val d'Essonne",
        "École polytechnique X",
        "Université Paris Nanterre",
        "CentraleSupélec",
        "Institut catholique d'études supérieures (ICES)",
        "Université confédérale Léonard de Vinci",
        "Université Paris 13 - Paris Nord",
        "Université de la Nouvelle-Calédonie",
        "École nationale supérieure de l'électronique et de ses applications de Cergy (ENSEA)",
        "École supérieure d'ingénieurs des travaux de la construction de Cachan (ESITC)",
        "Institut national supérieur de formation et de recherche pour l'éducation des jeunes handicapés et les enseignements adaptés (INS HEA)",
        "École de biologie industrielle (EBI)",
        "Campus Condorcet",
        "Université de Rouen",
        "École normale supérieure de Paris (ENS ULM)",
        "Université du Havre",
        "École pratique des hautes études (EPHE)",
        "Institut national d'histoire de l'art (INHA)",
        "Hautes Études-Sorbonne-Arts et Métiers (HESAM)",
        "Sorbonne Universités",
        "Groupe des écoles nationales d'économie et statistique (GENES)",
        "Institut supérieur d'électronique de Paris (ISEP)",
        "Université Paris-Dauphine (Paris-Dauphine)",
        "École nationale supérieure des sciences de l'information et des bibliothèques (ENSSIB)",
        "Institut d'administration des entreprises de Paris (IAE de Paris)",
        "Université du Maine",
        "École nationale supérieure de chimie de Paris (ENS Chimie de Paris)",
        "Université de Lyon (UDL)",
        "École nationale supérieure d'architecture de Paris-Belleville (ENSAPB)",
        "École nationale supérieure des arts et techniques du théâtre (ENSATT)",
        "Université de Bretagne Occidentale (UBO)",
        "Université Toulouse 1 - Capitole",
        "Université de Rennes 1",
        "Institut d'études politiques de Bordeaux (IEP de Bordeaux)",
        "Institut supérieur des sciences agronomiques, agroalimentaires, horticoles et du paysage (Agro campus Ouest)",
        "Institut supérieur de l'aéronautique et de l'espace ISAE",
        "École normale supérieure de Rennes (ENS Rennes)",
        "ECAM Rennes Louis de Broglie (ECAM Rennes)",
        "Normandie Université",
        "Université Bourgogne - Franche-Comté",
        "Institut d'études politiques de Paris (IEP de Paris)",
        "Université Claude Bernard - Lyon 1",
        "Université Paris 1 - Panthéon Sorbonne",
        "Université de Haute-Alsace (UHA)",
        "Université catholique de Lyon (UCLy)",
        "Institut supérieur du commerce de Paris ISC Paris Business School",
        "Institut national des langues et civilisations orientales (INALCO)",
        "Université Sorbonne Paris Cité",
        "École normale supérieure de Cachan (ENS de Cachan)",
        "École nationale vétérinaire d'Alfort (ENVA)",
        "Institut d'Optique Graduate School (IOGS)",
        "École spéciale des travaux publics, du bâtiment et de l'industrie (ESTP)",
        "École française d'Athènes (EFA)",
        "EPF - École d'ingénieur-e-s EPF",
        "Institut polytechnique Grand Paris (IPGP)",
        "Institut agronomique, vétérinaire et forestier de France (IAVFF)",
        "Université de la Polynésie Française (UPF)",
        "Université de La Réunion",
        "Université de Guyane",
        "Casa de Velázquez de Madrid",
        "Ecole centrale de Nantes",
        "Université de Nantes",
        "Institut catholique de Lille (ICL)",
        "École nationale supérieure de chimie de Lille (ENS Chimie Lille)",
        "École supérieure des technologies industrielles avancées (ESTIA)",
        "École nationale du génie de l'eau et de l'environnement de Strasbourg (ENGEES)",
        "École nationale d'ingénieurs de Saint-Étienne (ENISE)",
        "École supérieure angevine en informatique et productique (ESAIP)",
        "Facultés libres de l'Ouest (FLO)",
        "Université de Champagne",
        "Université Nice - Sophia-Antipolis",
        "École nationale supérieure d'ingénieurs de Caen ENSI Caen",
        "Autre université à l'étranger",
    ];

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        foreach ($this->schoolNames as $schoolName) {
            $school = App\School::firstOrNew([ 'value' => $schoolName ]);
            $school->value = $schoolName;
            $school->save();
        }
    }
}