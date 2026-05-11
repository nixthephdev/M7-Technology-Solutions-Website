<?php
// Product data array for M7 Technology Solutions

$products = [
    'dicing' => [
        'title' => 'Dicing Products',
        'description' => 'Precision dicing solutions for semiconductor manufacturing',
        'categories' => [
            'consumables' => [
                'title' => 'Dicing Consumables',
                'products' => [
                    [
                        'name' => 'Dicing Blades - Hub Type (Nickel Bond Electroformed)',
                        'description' => 'Using electroplated nickel bond, ultra thin hub blades can provide stable dicing performance of narrow street wafer. With full thickness serial can meet various kerf requirement, with minimum blade thickness from 10-15um to meet narrowest dicing street.',
                        'application' => 'Silicon wafer, compound semiconductor wafers [Si, SiC, GaAs, GaP, oxide wafer(LiTaO3)] and others.',
                        'specifications' => [
                            'Wheel Code' => '12A235 X 760',
                            'Blade Dimension' => '350050S',
                            'Diamond Grit Size' => '5000#, 4500#, 4000#, 3500#, 3000#, 2500#, 2000#, 1800#, 1700#, 1500#',
                            'Diamond Concentration' => '50, 70, 90, 110, 130',
                            'Bond Hardness' => 'S (Soft), M (Middle), H (Hard)'
                        ],
                        'image' => 'images/Products/Products/1. ZZSM Blades/Blades NICKEL BOND ELECTROFORMED.png'
                    ],
                    [
                        'name' => 'Dicing Blades - Hubless Type (Resin Bond)',
                        'description' => 'Resin bond dicing blades without steel core is mainly used for precision cutting and slotting for semiconductor, optical glass, quartz glass, ceramics and so on.',
                        'application' => 'QFN, LGA, LED, BGA, DFN, diodes, blue glass, crystal, magnetic materials.',
                        'specifications' => [
                            'Outer Diameter' => '50~60, 60~76.2, 77~101.6, 102~125, 125~156',
                            'Thickness' => '0.06, 0.1, 0.2, 0.3, 0.4, 0.5, 1.0, 1.5, 2.0',
                            'Inner Diameter' => '25.4, 31.75, 40, 52, 69.875, 88.9, 114.3'
                        ],
                        'image' => 'images/Products/Products/1. ZZSM Blades/Resin Bond.png'
                    ],
                    [
                        'name' => 'Dicing Blades - Metal Bond',
                        'description' => 'Metal bond high precision dicing blades without steel plate are made of identical material, with thin thickness and high precision, they are mainly used for grooving and cutting with high accuracy and slight cutting depth.',
                        'application' => 'BGA, LGA, LED diode, optical glass, tool steel and stainless steel.',
                        'specifications' => [
                            'Outer Diameter' => '60~76.2, 78~101.6, 101.6~127, 130~127',
                            'Thickness' => '0.07, 0.1, 0.2, 0.3, 0.4, 0.5, 1.0, 1.5, 2.0',
                            'Inner Diameter' => '50.8, 69.875, 76.2, 88.9, 114.3'
                        ],
                        'image' => 'images/Products/Products/1. ZZSM Blades/Metal Bond.png'
                    ],
                    [
                        'name' => 'ELF Electroforming Bond Blades',
                        'description' => 'High-speed cutting with minimal chipping for SiC wafer-based power devices, which typically feature metal plating on the entire backside.',
                        'features' => [
                            'Speed: 15 mm/sec vs 10 mm/sec (other company)',
                            'Straightness: ✓',
                            'No Chipping: ✓',
                            'Size: 56Dx 0.027T x 40H (Hubless Type), 56D x 0.021T x 40H (Hub Type)'
                        ],
                        'image' => 'images/Products/Products/5. READ Blades/Elf electroforming bond.png'
                    ],
                    [
                        'name' => 'SSB/SSH (Metal-Resin-Vitrified) Bond Blades',
                        'description' => 'Exceptional self-refreshing of diamond grits through the SSB/SSH original bond and superior blade shape control via 3-layer structure.',
                        'features' => [
                            'Speed: 80mm/sec vs 50 mm/sec (other company)',
                            'Long Life: 10 km vs 5 km',
                            'Full Cut and Half Cut capabilities',
                            'Grooving test on in-plated copper sheet'
                        ],
                        'image' => 'images/Products/Products/1. ZZSM Blades/NICKEL BASED.png'
                    ],
                    [
                        'name' => 'Multi-gang Dicing Blade',
                        'description' => 'Assembled 2 to 80 blades with micron-level precision. Accuracy ensured through comprehensive test cut results prior to shipping. Able to match wheel specifications to suit the processing purpose.',
                        'image' => 'images/Products/Products/5. READ Blades/Multi-gang dicing blades.png'
                    ],
                    [
                        'name' => 'Three-Layered-Blade',
                        'description' => 'Diamond blade composed from different 3 layers specification. High quality is needed. But higher speed processing is necessary, too. Rough size diamond is in center layer for high grinding ability. Fine size diamond is in each side layers for maintain the good quality.',
                        'image' => 'images/Products/Products/1. ZZSM Blades/Pachage Sing. Hubless.png'
                    ],
                    [
                        'name' => 'Dresser Boards',
                        'description' => 'The dressing plate, which is for cutting blades used in semiconductor package, mainly consists of ceramic or resin as bond and silicon carbide or corundum as abrasive. It is for truing and dressing the blades, which is used in cutting semiconductor package and glass.',
                        'image' => 'images/Products/Products/2. Dresser Board/Dresser Board.png'
                    ]
                ]
            ],
            'spare_parts' => [
                'title' => 'Dicing Spare Parts',
                'products' => [
                    [
                        'name' => 'Carbon Brush',
                        'description' => 'The carbon brush makes sure the commutation process remains free from sparks and helps conduct electric current between the moving parts of the motor. The brush is also responsible for changing the course of current in the conductors during the rotation process.',
                        'note' => 'Carbon brush specs vary from machine models.',
                        'image' => 'images/Products/Products/3. Carbon Brush/Carbon brush.png'
                    ],
                    [
                        'name' => 'BBD Fiber Prism',
                        'description' => 'High-precision fiber optic sensor component for dicing equipment.',
                        'specifications' => [
                            'Fiber type' => 'Flexible',
                            'Sensing Distance (BR2/L999)' => '9mm',
                            'Operating temperature' => '-40°C ~ +70°C',
                            'Minimum bending radius' => 'R2',
                            'Fiber Diameter' => 'OD=ø2.2:ø1.0'
                        ],
                        'image' => 'images/Products/Products/4. BBD Fiber Prism/BBD Fiber Prism.png'
                    ],
                    [
                        'name' => 'NCS Fiber Prism',
                        'description' => 'Advanced fiber optic sensing solution for precision dicing applications.',
                        'specifications' => [
                            'Fiber type' => 'Flexible',
                            'Sensing Distance (BR2/L999)' => '9mm',
                            'Operating temperature' => '-40°C ~ +70°C',
                            'Minimum bending radius' => 'R2',
                            'Fiber Diameter' => 'OD=ø2.2:ø1.0'
                        ],
                        'image' => 'images/Products/Products/6. NCS Fiber Prism/NCS Fiber Prism.png'
                    ],
                    [
                        'name' => 'Vacuum Pads',
                        'description' => 'Vacuum pads engage an object and attached to it with an applied, sealed vacuum. The pads can be actuated to lift, move, or position the workpiece in assembly or inspection applications.',
                        'types' => ['Flat type', 'Bellows type', 'Thin Flat type'],
                        'image' => 'images/Products/Products/7. Vacuum Pads/Vacuum Pads.png'
                    ],
                    [
                        'name' => 'UV Tapes',
                        'description' => 'Semiconductor UV adhesive tapes are specialized adhesive tapes designed for use in the semiconductor industry during the fabrication and packaging processes. It can be released from its bond and cut at specific UV light exposure.',
                        'benefits' => 'Facilitative removal through UV exposure without causing hazardous damage to sensitive semiconductor surfaces or emitting particles.',
                        'image' => 'images/Products/Products/8. UV Tapes/UV Tapes.png'
                    ],
                    [
                        'name' => 'UV Lamps',
                        'description' => 'Contains mercury, scandium and various other metal halogenides in an inner bulb that produces a very high light output. As the high temperature of the arc discharge excites the halogenides to evaporate and separate into atoms, the metallic atoms illuminate and release the predetermined target ultraviolet wavelength.',
                        'image' => 'images/Products/Products/13. UV Lamp/Ushio.png'
                    ],
                    [
                        'name' => 'Flange',
                        'description' => 'Flanges for blades in dicing are components used to securely mount and stabilize dicing blades during the wafer cutting process in semiconductor manufacturing. They ensure precise alignment, prevent vibration, and maintain blade rigidity for accurate cuts.',
                        'material' => 'Made from durable materials like stainless steel',
                        'features' => 'Designed for high-speed operation and can be customized for different blade sizes and dicing machines.',
                        'image' => 'images/Products/Products/9. Flanges/Flanges.png'
                    ],
                    [
                        'name' => 'Jig Nut',
                        'description' => 'The tool is used to tighten outer flange lock nut when installing new blade to have the blade locked in place.',
                        'image' => 'images/Products/Products/12. Jig Nut/Jig Nut.png'
                    ],
                    [
                        'name' => 'Chuck Tables',
                        'description' => 'Fine-pore ceramic chuck table has the characteristics of high flatness and parallelism, compact and uniform structure with high strength, good permeability, uniform adsorption affinity and dressing easily.',
                        'image' => 'images/Products/Products/10. Chuck Table/Chuck Table.png'
                    ],
                    [
                        'name' => 'Bellows',
                        'description' => 'Accordion-like component that protects the machine\'s internal parts from dust and debris during the cutting process. It allows for movement while maintaining a barrier that prevents contaminants from damaging sensitive components.',
                        'benefits' => 'Ensures the machine operates efficiently and maintains a cleaner environment.',
                        'image' => 'images/Products/Products/20. ESD Consumables/6. Non Woven Facemask.png'
                    ]
                ]
            ]
        ]
    ],
    'equipment' => [
        'title' => 'Equipment',
        'description' => 'Advanced industrial equipment for various applications',
        'products' => [
            [
                'name' => 'RF Plasma Cleaning System',
                'description' => 'Advanced plasma cleaning system for semiconductor and industrial applications.',
                'image' => 'images/Products/Products/26. RF Plasma Cleaning/1. RF Plasma Cleaning Batch Type.png'
            ],
            [
                'name' => 'Laser Marking Machines',
                'description' => 'High-precision laser marking systems for industrial marking and engraving applications.',
                'image' => 'images/Products/Products/28. IC Laser Marcking Sys/1. For EMC and LF.png'
            ],
            [
                'name' => 'DI Water Resistivity Controller Unit',
                'description' => 'Precision water quality monitoring and control system for semiconductor manufacturing.',
                'image' => 'images/Products/Products/27. DI Water Resistivity Controller/1. Panel Mount.png'
            ],
            [
                'name' => 'Voltage SAG Protector',
                'description' => 'Power protection system to prevent voltage fluctuations and ensure stable operation.',
                'image' => 'images/Products/Products/25. Voltage SAG protector/VOLTAGE SAG PROTECTOR.png'
            ],
            [
                'name' => 'Centrifugal Mixer',
                'description' => 'High-speed mixing equipment for various industrial applications.',
                'image' => 'images/Products/Products/23. Planetary Mixer/Planetary Mixer.png'
            ],
            [
                'name' => 'X-Ray Machines',
                'description' => 'Industrial X-ray inspection systems for quality control and defect detection.',
                'image' => 'images/Products/Products/22. Mini IP Camera/Mini IP Camera.png'
            ],
            [
                'name' => 'Vision System and Test Handlers',
                'description' => 'Automated vision inspection and handling systems for semiconductor testing.',
                'image' => 'images/Products/Products/21. Mircoscopes/4. Compact Microscope CCD Camera.png'
            ],
            [
                'name' => 'Industrial Chillers (Healthcare)',
                'description' => 'Specialized cooling systems for healthcare and medical applications.',
                'image' => 'images/Products/Products/14. Silicon Dust Cleaner/Silicon Dust Cleaner.png'
            ],
            [
                'name' => 'UV Machine',
                'description' => 'Ultraviolet processing equipment for various industrial applications.',
                'image' => 'images/Products/Products/13. UV Lamp/Toshiba.png'
            ],
            [
                'name' => 'Wafer Mounter',
                'description' => 'Precision wafer mounting equipment for semiconductor processing.',
                'image' => 'images/Products/Products/24. Vacuum Wand/Vacuum Wand.png'
            ],
            [
                'name' => 'Glob Top Dispenser',
                'description' => 'Automated dispensing system for glob top applications in semiconductor packaging.',
                'image' => 'images/Products/Products/16. AP&T Ionizers/Ion Blower.png'
            ]
        ]
    ],
    'inspection' => [
        'title' => 'Inspection Tools',
        'description' => 'Precision inspection and measurement equipment',
        'products' => [
            [
                'name' => 'Binocular Stereo Microscope',
                'description' => 'High-quality stereo microscope for detailed inspection and analysis.',
                'image' => 'images/Products/Products/21. Mircoscopes/1. SMZ-0745B Stereo Microscope.jpg'
            ],
            [
                'name' => 'Trinocular Stereo Microscope with Camera',
                'description' => 'Advanced stereo microscope with integrated camera system for documentation and analysis.',
                        'image' => 'images/Products/Products/21. Mircoscopes/2. BA Series Metallurgical Microscope.png'
            ],
            [
                'name' => 'Video Microscope',
                'description' => 'Digital microscope system with video output for real-time inspection and recording.',
                        'image' => 'images/Products/Products/21. Mircoscopes/3. Microscope CCD Camera.png'
            ],
            [
                'name' => 'Magnifying Glass',
                'description' => 'High-quality magnifying equipment for detailed visual inspection.',
                'image' => 'images/Products/Products/21. Mircoscopes/1. SMZ-0745B Stereo Microscope.jpg'
            ]
        ]
    ],
    'esd' => [
        'title' => 'ESD Products',
        'description' => 'Comprehensive ESD protection solutions',
        'categories' => [
            'consumables' => [
                'title' => 'ESD Consumables',
                'products' => [
                    [
                        'name' => 'ESD Gloves',
                        'description' => 'Anti-static gloves for safe handling of sensitive electronic components.',
                        'image' => 'images/Products/Products/20. ESD Consumables/1. Gloves.png'
                    ],
                    [
                        'name' => 'Wrist Strap',
                        'description' => 'Anti-static wrist straps for personal grounding during electronic work.',
                        'image' => 'images/Products/Products/20. ESD Consumables/2. Wrist Strap.png'
                    ],
                    [
                        'name' => 'ESD Mats/Mattings',
                        'description' => 'Anti-static floor and work surface mats for ESD protection.',
                        'image' => 'images/Products/Products/20. ESD Consumables/3. Alcoho bottle.png'
                    ],
                    [
                        'name' => 'Sticky Mats',
                        'description' => 'Adhesive mats for removing contaminants from shoes and equipment.',
                        'image' => 'images/Products/Products/20. ESD Consumables/4. Sticky Mat.png'
                    ],
                    [
                        'name' => 'ESD Rubber Mats',
                        'description' => 'Durable rubber mats with anti-static properties for work areas.',
                        'image' => 'images/Products/Products/20. ESD Consumables/5. ESD Rubber Mat.jpg'
                    ],
                    [
                        'name' => 'Cleanroom Wipers',
                        'description' => 'Lint-free wipers for cleanroom and ESD-sensitive environments.',
                        'image' => 'images/Products/Products/20. ESD Consumables/9. Cleanroom wiper.png'
                    ],
                    [
                        'name' => 'Cleanroom Swabs',
                        'description' => 'Precision swabs for cleaning sensitive electronic components.',
                        'image' => 'images/Products/Products/20. ESD Consumables/8. Cleanroom Swabs.jpg'
                    ],
                    [
                        'name' => 'SMT Automatic Stencil Wiper Roll',
                        'description' => 'Automated cleaning rolls for SMT stencil cleaning applications.',
                        'image' => 'images/Products/Products/20. ESD Consumables/11. SMT Automatic Stencil Wiper Roll.jpg'
                    ],
                    [
                        'name' => 'Tweezers',
                        'description' => 'Anti-static tweezers for precise handling of electronic components.',
                        'image' => 'images/Products/Products/11. Tweezers/Tweezers.png'
                    ]
                ]
            ],
            'equipment' => [
                'title' => 'ESD Equipment',
                'products' => [
                    [
                        'name' => 'Shoe Cleaner',
                        'description' => 'Automated shoe cleaning system for cleanroom entry.',
                        'image' => 'images/Products/Products/17. Sole Cleaner/Sole Cleaner.png'
                    ],
                    [
                        'name' => 'Air Shower',
                        'description' => 'Personnel decontamination system for cleanroom entry.',
                        'image' => 'images/Products/Products/18. Air Shower/Air Shower.png'
                    ],
                    [
                        'name' => 'Ionizer Tester (Static Meter)',
                        'description' => 'Precision instrument for measuring static electricity and ionizer performance.',
                        'image' => 'images/Products/Products/15. Sunje Ionizers/Overhead Blower.png'
                    ],
                    [
                        'name' => 'Particle Counter',
                        'description' => 'Airborne particle monitoring system for cleanroom environments.',
                        'image' => 'images/Products/Products/16. AP&T Ionizers/overhead Blower.png'
                    ],
                    [
                        'name' => 'IMS Closed Loop Static Monitoring and Elimination System',
                        'description' => 'Advanced static monitoring and control system for industrial applications.',
                        'image' => 'images/Products/Products/19. ESD Turnstile/ESD Turnstile.png'
                    ],
                    [
                        'name' => 'ESD Controls (Ionizers)',
                        'description' => 'Static elimination systems for various industrial applications.',
                        'image' => 'images/Products/Products/15. Sunje Ionizers/Ion Blowers.png'
                    ]
                ]
            ]
        ]
    ],
    'services' => [
        'title' => 'Other Services Offered',
        'description' => 'Additional services beyond our product catalog',
        'services' => [
            [
                'name' => 'Chuck Table Refurbishment',
                'description' => 'Professional refurbishment services for chuck tables to restore optimal performance.',
                'image' => 'chuck-refurbishment.jpg'
            ],
            [
                'name' => 'Spindle Refurbishment',
                'description' => 'Expert spindle repair and refurbishment services for extended equipment life.',
                'image' => 'spindle-refurbishment.jpg'
            ],
            [
                'name' => 'Spare Parts Sourcing',
                'description' => 'Comprehensive spare parts sourcing service for obsolete and hard-to-find components.',
                'image' => 'spare-parts-sourcing.jpg'
            ],
            [
                'name' => 'Water Filtration & Waste Water Management System',
                'description' => 'Complete water treatment solutions for industrial applications.',
                'image' => 'water-filtration.jpg'
            ],
            [
                'name' => 'Automation and Integration',
                'description' => 'Custom automation solutions and system integration services.',
                'image' => 'automation-integration.jpg'
            ],
            [
                'name' => 'Air-conditioning and Chiller Installation (Healthcare)',
                'description' => 'Specialized HVAC installation services for healthcare facilities.',
                'image' => 'hvac-installation.jpg'
            ]
        ]
    ]
];

return $products;
?>
