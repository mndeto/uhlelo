<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\Inventory;
use App\Models\Supplier;

class SuppInvSeeder extends Seeder {

    public function run() {

        DB::table('inventory_suppliers')->delete();
        DB::insert("INSERT INTO `inventory_suppliers` (`inventory_id`, `supplier_id`, `cost`, `created_at`) VALUES
        (1, 6, '465.00', '2016-03-23 14:39:27'),
        (2, 6, '465.00', '2016-03-23 14:39:27'),
        (3, 6, '95.00', '2016-03-23 14:39:27'),
        (4, 6, '150.00', '2016-03-23 14:39:27'),
        (5, 6, '150.00', '2016-03-23 14:39:27'),
        (6, 6, '200.00', '2016-03-23 14:39:27'),
        (7, 6, '200.00', '2016-03-23 14:39:27'),
        (8, 6, '200.00', '2016-03-23 14:39:27'),
        (9, 6, '75.00', '2016-03-23 14:39:27'),
        (10, 6, '96.00', '2016-03-23 14:39:27'),
        (11, 6, '110.00', '2016-03-23 14:39:27'),
        (12, 6, '110.00', '2016-03-23 14:39:27'),
        (13, 6, '110.00', '2016-03-23 14:39:27'),
        (14, 6, '110.00', '2016-03-23 14:39:27'),
        (15, 6, '125.00', '2016-03-23 14:39:27'),
        (16, 6, '66.00', '2016-03-23 14:39:27'),
        (17, 6, '94.25', '2016-03-23 14:39:27'),
        (18, 6, '95.00', '2016-03-23 14:39:27'),
        (19, 6, '150.00', '2016-03-23 14:39:27'),
        (20, 6, '150.00', '2016-03-23 14:39:27'),
        (21, 6, '150.00', '2016-03-23 14:39:27'),
        (22, 6, '100.00', '2016-03-23 14:39:27'),
        (23, 6, '110.00', '2016-03-23 14:39:27'),
        (24, 6, '110.00', '2016-03-23 14:39:27'),
        (25, 6, '120.00', '2016-03-23 14:39:27'),
        (26, 6, '560.00', '2016-03-23 14:39:27'),
        (27, 6, '430.00', '2016-03-23 14:39:27'),
        (28, 6, '250.00', '2016-03-23 14:39:27'),
        (29, 6, '600.00', '2016-03-23 14:39:27'),
        (30, 6, '650.00', '2016-03-23 14:39:27'),
        (31, 6, '500.00', '2016-03-23 14:39:27'),
        (32, 6, '850.00', '2016-03-23 14:39:27'),
        (33, 6, '760.00', '2016-03-23 14:39:27'),
        (34, 6, '1083.00', '2016-03-23 14:39:27'),
        (35, 6, '250.00', '2016-03-23 14:39:27'),
        (36, 6, '300.00', '2016-03-23 14:39:27'),
        (37, 6, '450.00', '2016-03-23 14:39:27'),
        (38, 6, '240.00', '2016-03-23 14:39:27'),
        (39, 6, '240.00', '2016-03-23 14:39:27'),
        (40, 6, '340.00', '2016-03-23 14:39:27'),
        (41, 6, '550.00', '2016-03-23 14:39:27'),
        (42, 6, '500.00', '2016-03-23 14:39:27'),
        (43, 6, '250.00', '2016-03-23 14:39:27'),
        (44, 6, '435.50', '2016-03-23 14:39:27'),
        (45, 6, '150.00', '2016-03-23 14:39:27'),
        (46, 6, '180.00', '2016-03-23 14:39:27'),
        (47, 6, '560.00', '2016-03-23 14:39:27'),
        (48, 10, '95.00', '2016-03-23 14:39:27'),
        (49, 10, '95.00', '2016-03-23 14:39:27'),
        (50, 10, '450.00', '2016-03-23 14:39:27'),
        (51, 10, '1.00', '2016-03-23 14:39:27'),
        (52, 10, '85.00', '2016-03-23 14:39:27'),
        (53, 10, '85.00', '2016-03-23 14:39:27'),
        (54, 10, '95.00', '2016-03-23 14:39:27'),
        (55, 10, '70.00', '2016-03-23 14:39:27'),
        (56, 10, '395.00', '2016-03-23 14:39:27'),
        (57, 10, '395.00', '2016-03-23 14:39:27'),
        (58, 10, '395.00', '2016-03-23 14:39:27'),
        (59, 10, '1.00', '2016-03-23 14:39:27'),
        (60, 10, '85.00', '2016-03-23 14:39:27'),
        (61, 10, '80.00', '2016-03-23 14:39:27'),
        (62, 10, '95.00', '2016-03-23 14:39:27'),
        (63, 10, '1300.00', '2016-03-23 14:39:27'),
        (64, 10, '300.00', '2016-03-23 14:39:27'),
        (65, 12, '105.00', '2016-03-23 14:39:27'),
        (66, 12, '105.00', '2016-03-23 14:39:27'),
        (67, 12, '120.00', '2016-03-23 14:39:27'),
        (68, 12, '100.00', '2016-03-23 14:39:27'),
        (69, 12, '110.00', '2016-03-23 14:39:27'),
        (70, 12, '650.00', '2016-03-23 14:39:27'),
        (71, 12, '400.00', '2016-03-23 14:39:27'),
        (72, 12, '75.00', '2016-03-23 14:39:27'),
        (73, 12, '75.00', '2016-03-23 14:39:27'),
        (74, 12, '78.00', '2016-03-23 14:39:27'),
        (75, 12, '56.00', '2016-03-23 14:39:27'),
        (76, 12, '163.00', '2016-03-23 14:39:27'),
        (77, 12, '120.00', '2016-03-23 14:39:27'),
        (78, 12, '565.00', '2016-03-23 14:39:27'),
        (79, 12, '568.00', '2016-03-23 14:39:27'),
        (80, 12, '866.00', '2016-03-23 14:39:27'),
        (81, 12, '600.00', '2016-03-23 14:39:27'),
        (82, 12, '600.00', '2016-03-23 14:39:27'),
        (83, 12, '620.00', '2016-03-23 14:39:27'),
        (84, 12, '858.00', '2016-03-23 14:39:27'),
        (85, 12, '633.00', '2016-03-23 14:39:27'),
        (86, 12, '600.00', '2016-03-23 14:39:27'),
        (87, 12, '745.00', '2016-03-23 14:39:27'),
        (88, 12, '955.00', '2016-03-23 14:39:27'),
        (89, 12, '1000.00', '2016-03-23 14:39:27'),
        (90, 12, '2500.00', '2016-03-23 14:39:27'),
        (91, 12, '3150.00', '2016-03-23 14:39:27'),
        (92, 12, '164.00', '2016-03-23 14:39:27'),
        (93, 12, '70.00', '2016-03-23 14:39:27'),
        (94, 12, '285.00', '2016-03-23 14:39:27'),
        (95, 12, '250.00', '2016-03-23 14:39:27'),
        (96, 12, '286.00', '2016-03-23 14:39:27'),
        (97, 12, '700.00', '2016-03-23 14:39:27'),
        (98, 12, '4200.00', '2016-03-23 14:39:27'),
        (99, 12, '1200.00', '2016-03-23 14:39:27'),
        (100, 12, '320.00', '2016-03-23 14:39:27'),
        (101, 12, '116.00', '2016-03-23 14:39:27'),
        (102, 12, '250.00', '2016-03-23 14:39:27'),
        (103, 12, '320.00', '2016-03-23 14:39:27'),
        (104, 12, '255.00', '2016-03-23 14:39:27'),
        (105, 12, '323.00', '2016-03-23 14:39:27'),
        (106, 12, '532.00', '2016-03-23 14:39:27'),
        (107, 12, '500.00', '2016-03-23 14:39:27'),
        (108, 12, '222.00', '2016-03-23 14:39:27'),
        (109, 12, '576.00', '2016-03-23 14:39:27'),
        (110, 12, '1022.00', '2016-03-23 14:39:27'),
        (111, 12, '333.00', '2016-03-23 14:39:27'),
        (112, 12, '450.00', '2016-03-23 14:39:27'),
        (113, 12, '850.00', '2016-03-23 14:39:27'),
        (114, 18, '97.00', '2016-03-23 14:39:27'),
        (115, 18, '100.00', '2016-03-23 14:39:27'),
        (116, 18, '2200.00', '2016-03-23 14:39:27'),
        (117, 18, '250.00', '2016-03-23 14:39:27'),
        (118, 19, '362.00', '2016-03-23 14:39:27'),
        (119, 19, '680.00', '2016-03-23 14:39:27'),
        (120, 19, '388.00', '2016-03-23 14:39:27'),
        (121, 19, '285.00', '2016-03-23 14:39:27'),
        (122, 19, '399.00', '2016-03-23 14:39:27'),
        (123, 11, '566.00', '2016-03-23 14:39:27'),
        (124, 11, '600.00', '2016-03-23 14:39:27'),
        (125, 11, '750.00', '2016-03-23 14:39:27'),
        (126, 11, '650.00', '2016-03-23 14:39:27'),
        (127, 11, '708.00', '2016-03-23 14:39:27'),
        (128, 11, '286.00', '2016-03-23 14:39:27'),
        (129, 11, '245.00', '2016-03-23 14:39:27'),
        (130, 11, '300.00', '2016-03-23 14:39:27'),
        (131, 11, '325.00', '2016-03-23 14:39:27'),
        (132, 11, '525.00', '2016-03-23 14:39:27'),
        (133, 11, '533.00', '2016-03-23 14:39:27'),
        (134, 5, '1.00', '2016-03-23 14:39:27'),
        (135, 5, '1.00', '2016-03-23 14:39:27'),
        (136, 5, '1.00', '2016-03-23 14:39:27'),
        (137, 5, '1.00', '2016-03-23 14:39:27'),
        (138, 5, '99.00', '2016-03-23 14:39:27'),
        (139, 5, '100.00', '2016-03-23 14:39:27'),
        (140, 5, '100.00', '2016-03-23 14:39:27'),
        (141, 5, '100.00', '2016-03-23 14:39:27'),
        (142, 5, '160.00', '2016-03-23 14:39:27'),
        (143, 5, '160.00', '2016-03-23 14:39:27'),
        (144, 5, '96.00', '2016-03-23 14:39:27'),
        (145, 5, '95.00', '2016-03-23 14:39:27'),
        (146, 5, '1.00', '2016-03-23 14:39:27'),
        (147, 5, '80.00', '2016-03-23 14:39:27'),
        (148, 5, '100.00', '2016-03-23 14:39:27'),
        (149, 5, '115.00', '2016-03-23 14:39:27'),
        (150, 5, '100.00', '2016-03-23 14:39:27'),
        (151, 5, '115.00', '2016-03-23 14:39:27'),
        (152, 5, '800.00', '2016-03-23 14:39:27'),
        (153, 5, '539.40', '2016-03-23 14:39:27'),
        (154, 5, '55.00', '2016-03-23 14:39:27'),
        (155, 5, '55.00', '2016-03-23 14:39:27'),
        (156, 5, '87.98', '2016-03-23 14:39:27'),
        (157, 5, '56.00', '2016-03-23 14:39:27'),
        (158, 5, '95.00', '2016-03-23 14:39:27'),
        (159, 5, '65.00', '2016-03-23 14:39:27'),
        (160, 5, '120.00', '2016-03-23 14:39:27'),
        (161, 5, '60.00', '2016-03-23 14:39:27'),
        (162, 5, '49.00', '2016-03-23 14:39:27'),
        (163, 5, '2858.67', '2016-03-23 14:39:27'),
        (164, 5, '850.00', '2016-03-23 14:39:27'),
        (165, 5, '900.00', '2016-03-23 14:39:27'),
        (166, 5, '850.00', '2016-03-23 14:39:27'),
        (167, 5, '1600.00', '2016-03-23 14:39:27'),
        (168, 5, '550.00', '2016-03-23 14:39:27'),
        (169, 5, '750.00', '2016-03-23 14:39:27'),
        (170, 5, '722.00', '2016-03-23 14:39:27'),
        (171, 5, '150.00', '2016-03-23 14:39:27'),
        (172, 5, '199.00', '2016-03-23 14:39:27'),
        (173, 5, '186.00', '2016-03-23 14:39:27'),
        (174, 5, '250.00', '2016-03-23 14:39:27'),
        (175, 5, '240.00', '2016-03-23 14:39:27'),
        (176, 5, '255.00', '2016-03-23 14:39:27'),
        (177, 5, '400.00', '2016-03-23 14:39:27'),
        (178, 5, '250.00', '2016-03-23 14:39:27'),
        (179, 5, '500.00', '2016-03-23 14:39:27'),
        (180, 1, '143.00', '2016-03-23 14:39:27'),
        (181, 1, '125.00', '2016-03-23 14:39:27'),
        (182, 1, '114.40', '2016-03-23 14:39:27'),
        (183, 1, '114.40', '2016-03-23 14:39:27'),
        (184, 1, '100.00', '2016-03-23 14:39:27'),
        (185, 1, '114.40', '2016-03-23 14:39:27'),
        (186, 1, '180.70', '2016-03-23 14:39:27'),
        (187, 1, '126.10', '2016-03-23 14:39:27'),
        (188, 1, '125.00', '2016-03-23 14:39:27'),
        (189, 1, '114.40', '2016-03-23 14:39:27'),
        (190, 1, '114.40', '2016-03-23 14:39:27'),
        (191, 1, '125.00', '2016-03-23 14:39:27'),
        (192, 1, '143.00', '2016-03-23 14:39:27'),
        (193, 1, '114.40', '2016-03-23 14:39:27'),
        (194, 1, '114.40', '2016-03-23 14:39:27'),
        (195, 1, '114.40', '2016-03-23 14:39:27'),
        (196, 1, '114.40', '2016-03-23 14:39:27'),
        (197, 1, '114.40', '2016-03-23 14:39:27'),
        (198, 1, '114.40', '2016-03-23 14:39:27'),
        (199, 1, '125.00', '2016-03-23 14:39:27'),
        (200, 1, '135.00', '2016-03-23 14:39:27'),
        (201, 1, '227.50', '2016-03-23 14:39:27'),
        (202, 1, '172.90', '2016-03-23 14:39:27'),
        (203, 1, '172.90', '2016-03-23 14:39:27'),
        (204, 1, '172.90', '2016-03-23 14:39:27'),
        (205, 1, '172.90', '2016-03-23 14:39:27'),
        (206, 1, '172.90', '2016-03-23 14:39:27'),
        (207, 1, '172.90', '2016-03-23 14:39:27'),
        (208, 1, '125.00', '2016-03-23 14:39:27'),
        (209, 1, '227.50', '2016-03-23 14:39:27'),
        (210, 1, '172.90', '2016-03-23 14:39:27'),
        (211, 1, '143.00', '2016-03-23 14:39:27'),
        (212, 1, '125.00', '2016-03-23 14:39:27'),
        (213, 1, '114.40', '2016-03-23 14:39:27'),
        (214, 1, '127.00', '2016-03-23 14:39:27'),
        (215, 1, '126.10', '2016-03-23 14:39:27'),
        (216, 1, '143.00', '2016-03-23 14:39:27'),
        (217, 1, '114.40', '2016-03-23 14:39:27'),
        (218, 1, '114.40', '2016-03-23 14:39:27'),
        (219, 1, '225.00', '2016-03-23 14:39:27'),
        (220, 1, '172.90', '2016-03-23 14:39:27'),
        (221, 1, '172.90', '2016-03-23 14:39:27'),
        (222, 1, '172.90', '2016-03-23 14:39:27'),
        (223, 1, '172.90', '2016-03-23 14:39:27'),
        (224, 1, '180.00', '2016-03-23 14:39:27'),
        (225, 1, '180.00', '2016-03-23 14:39:27'),
        (226, 1, '181.35', '2016-03-23 14:39:27'),
        (227, 1, '181.35', '2016-03-23 14:39:27'),
        (228, 1, '227.00', '2016-03-23 14:39:27'),
        (229, 1, '227.00', '2016-03-23 14:39:27'),
        (230, 1, '227.50', '2016-03-23 14:39:27'),
        (231, 1, '227.50', '2016-03-23 14:39:27'),
        (232, 1, '100.00', '2016-03-23 14:39:27'),
        (233, 1, '80.00', '2016-03-23 14:39:27'),
        (234, 1, '59.47', '2016-03-23 14:39:27'),
        (235, 1, '59.47', '2016-03-23 14:39:27'),
        (236, 1, '66.95', '2016-03-23 14:39:27'),
        (237, 1, '66.95', '2016-03-23 14:39:27'),
        (238, 1, '66.95', '2016-03-23 14:39:27'),
        (239, 1, '66.95', '2016-03-23 14:39:27'),
        (240, 1, '66.95', '2016-03-23 14:39:27'),
        (241, 1, '66.95', '2016-03-23 14:39:27'),
        (242, 1, '80.00', '2016-03-23 14:39:27'),
        (243, 1, '66.95', '2016-03-23 14:39:27'),
        (244, 1, '80.00', '2016-03-23 14:39:27'),
        (245, 1, '74.10', '2016-03-23 14:39:27'),
        (246, 1, '75.00', '2016-03-23 14:39:27'),
        (247, 1, '74.10', '2016-03-23 14:39:27'),
        (248, 1, '81.90', '2016-03-23 14:39:27'),
        (249, 1, '65.00', '2016-03-23 14:39:27'),
        (250, 1, '100.00', '2016-03-23 14:39:27'),
        (251, 1, '81.90', '2016-03-23 14:39:27'),
        (252, 1, '89.05', '2016-03-23 14:39:27'),
        (253, 1, '100.00', '2016-03-23 14:39:27'),
        (254, 1, '89.05', '2016-03-23 14:39:27'),
        (255, 1, '89.05', '2016-03-23 14:39:27'),
        (256, 1, '89.05', '2016-03-23 14:39:27'),
        (257, 1, '89.05', '2016-03-23 14:39:27'),
        (258, 1, '36.98', '2016-03-23 14:39:27'),
        (259, 1, '36.98', '2016-03-23 14:39:27'),
        (260, 1, '95.00', '2016-03-23 14:39:27'),
        (261, 1, '95.00', '2016-03-23 14:39:27'),
        (262, 1, '52.00', '2016-03-23 14:39:27'),
        (263, 1, '81.90', '2016-03-23 14:39:27'),
        (264, 1, '65.00', '2016-03-23 14:39:27'),
        (265, 1, '70.00', '2016-03-23 14:39:27'),
        (266, 1, '57.00', '2016-03-23 14:39:27'),
        (267, 1, '48.16', '2016-03-23 14:39:27'),
        (268, 1, '48.16', '2016-03-23 14:39:27'),
        (269, 1, '65.00', '2016-03-23 14:39:27'),
        (270, 1, '50.00', '2016-03-23 14:39:27'),
        (271, 1, '48.16', '2016-03-23 14:39:27'),
        (272, 1, '71.50', '2016-03-23 14:39:27'),
        (273, 1, '78.65', '2016-03-23 14:39:27'),
        (274, 1, '78.65', '2016-03-23 14:39:27'),
        (275, 1, '96.00', '2016-03-23 14:39:27'),
        (276, 1, '60.00', '2016-03-23 14:39:27'),
        (277, 1, '52.00', '2016-03-23 14:39:27'),
        (278, 1, '52.00', '2016-03-23 14:39:27'),
        (279, 1, '54.00', '2016-03-23 14:39:27'),
        (280, 1, '57.72', '2016-03-23 14:39:27'),
        (281, 1, '54.00', '2016-03-23 14:39:27'),
        (282, 1, '85.00', '2016-03-23 14:39:27'),
        (283, 1, '57.00', '2016-03-23 14:39:27'),
        (284, 1, '52.00', '2016-03-23 14:39:27'),
        (285, 1, '59.00', '2016-03-23 14:39:27'),
        (286, 1, '57.00', '2016-03-23 14:39:27'),
        (287, 1, '56.00', '2016-03-23 14:39:27'),
        (288, 1, '51.00', '2016-03-23 14:39:27'),
        (289, 1, '55.00', '2016-03-23 14:39:27'),
        (290, 1, '55.00', '2016-03-23 14:39:27'),
        (291, 1, '54.00', '2016-03-23 14:39:27'),
        (292, 1, '51.00', '2016-03-23 14:39:27'),
        (293, 1, '58.00', '2016-03-23 14:39:27'),
        (294, 1, '59.00', '2016-03-23 14:39:27'),
        (295, 1, '57.00', '2016-03-23 14:39:27'),
        (296, 1, '56.00', '2016-03-23 14:39:27'),
        (297, 1, '50.00', '2016-03-23 14:39:27'),
        (298, 1, '52.00', '2016-03-23 14:39:27'),
        (299, 1, '100.00', '2016-03-23 14:39:27'),
        (300, 1, '100.00', '2016-03-23 14:39:27'),
        (301, 1, '57.00', '2016-03-23 14:39:27'),
        (302, 1, '1.00', '2016-03-23 14:39:27'),
        (303, 1, '54.00', '2016-03-23 14:39:27'),
        (304, 1, '58.00', '2016-03-23 14:39:27'),
        (305, 1, '54.00', '2016-03-23 14:39:27'),
        (306, 1, '52.00', '2016-03-23 14:39:27'),
        (307, 1, '53.00', '2016-03-23 14:39:27'),
        (308, 1, '59.00', '2016-03-23 14:39:27'),
        (309, 1, '54.00', '2016-03-23 14:39:27'),
        (310, 1, '58.00', '2016-03-23 14:39:27'),
        (311, 1, '54.00', '2016-03-23 14:39:27'),
        (312, 1, '85.00', '2016-03-23 14:39:27'),
        (313, 1, '85.00', '2016-03-23 14:39:27'),
        (314, 1, '51.00', '2016-03-23 14:39:27'),
        (315, 1, '56.00', '2016-03-23 14:39:27'),
        (316, 1, '56.00', '2016-03-23 14:39:27'),
        (317, 1, '55.00', '2016-03-23 14:39:27'),
        (318, 1, '58.00', '2016-03-23 14:39:27'),
        (319, 1, '56.00', '2016-03-23 14:39:27'),
        (320, 1, '54.00', '2016-03-23 14:39:27'),
        (321, 1, '52.00', '2016-03-23 14:39:27'),
        (322, 1, '56.00', '2016-03-23 14:39:27'),
        (323, 1, '59.00', '2016-03-23 14:39:27'),
        (324, 1, '54.00', '2016-03-23 14:39:27'),
        (325, 1, '52.00', '2016-03-23 14:39:27'),
        (326, 1, '85.00', '2016-03-23 14:39:27'),
        (327, 1, '85.00', '2016-03-23 14:39:27'),
        (328, 1, '57.00', '2016-03-23 14:39:27'),
        (329, 1, '56.00', '2016-03-23 14:39:27'),
        (330, 1, '56.00', '2016-03-23 14:39:27'),
        (331, 1, '53.00', '2016-03-23 14:39:27'),
        (332, 1, '53.00', '2016-03-23 14:39:27'),
        (333, 1, '55.00', '2016-03-23 14:39:27'),
        (334, 1, '55.00', '2016-03-23 14:39:27'),
        (335, 1, '200.00', '2016-03-23 14:39:27'),
        (336, 1, '200.00', '2016-03-23 14:39:27'),
        (337, 1, '56.00', '2016-03-23 14:39:27'),
        (338, 1, '56.00', '2016-03-23 14:39:27'),
        (339, 1, '200.00', '2016-03-23 14:39:27'),
        (340, 1, '76.70', '2016-03-23 14:39:27'),
        (341, 1, '68.25', '2016-03-23 14:39:27'),
        (342, 1, '75.00', '2016-03-23 14:39:27'),
        (343, 1, '67.60', '2016-03-23 14:39:27'),
        (344, 1, '69.00', '2016-03-23 14:39:27'),
        (345, 1, '68.25', '2016-03-23 14:39:27'),
        (346, 1, '65.65', '2016-03-23 14:39:27'),
        (347, 1, '1.00', '2016-03-23 14:39:27'),
        (348, 1, '70.00', '2016-03-23 14:39:27'),
        (349, 1, '1.00', '2016-03-23 14:39:27'),
        (350, 1, '60.00', '2016-03-23 14:39:27'),
        (351, 1, '60.00', '2016-03-23 14:39:27'),
        (352, 1, '90.00', '2016-03-23 14:39:27'),
        (353, 1, '55.00', '2016-03-23 14:39:27'),
        (354, 1, '60.84', '2016-03-23 14:39:27'),
        (355, 1, '74.10', '2016-03-23 14:39:27'),
        (356, 1, '74.10', '2016-03-23 14:39:27'),
        (357, 1, '74.10', '2016-03-23 14:39:27'),
        (358, 1, '85.00', '2016-03-23 14:39:27'),
        (359, 1, '75.00', '2016-03-23 14:39:27'),
        (360, 1, '95.00', '2016-03-23 14:39:27'),
        (361, 1, '63.70', '2016-03-23 14:39:27'),
        (362, 1, '94.90', '2016-03-23 14:39:27'),
        (363, 1, '64.61', '2016-03-23 14:39:27'),
        (364, 1, '70.20', '2016-03-23 14:39:27'),
        (365, 1, '70.20', '2016-03-23 14:39:27'),
        (366, 1, '100.00', '2016-03-23 14:39:27'),
        (367, 1, '62.79', '2016-03-23 14:39:27'),
        (368, 1, '45.69', '2016-03-23 14:39:27'),
        (369, 4, '148.50', '2016-03-23 14:39:27'),
        (370, 4, '98.00', '2016-03-23 14:39:27'),
        (371, 4, '67.50', '2016-03-23 14:39:27'),
        (372, 4, '115.00', '2016-03-23 14:39:27'),
        (373, 4, '136.00', '2016-03-23 14:39:27'),
        (374, 4, '140.00', '2016-03-23 14:39:27'),
        (375, 4, '129.00', '2016-03-23 14:39:27'),
        (376, 2, '91.00', '2016-03-23 14:39:27'),
        (377, 2, '97.00', '2016-03-23 14:39:27'),
        (378, 2, '98.00', '2016-03-23 14:39:27'),
        (379, 2, '104.00', '2016-03-23 14:39:27'),
        (380, 2, '601.00', '2016-03-23 14:39:27'),
        (381, 2, '263.00', '2016-03-23 14:39:27'),
        (382, 2, '346.00', '2016-03-23 14:39:27'),
        (383, 2, '406.00', '2016-03-23 14:39:27'); ");
    }
}
