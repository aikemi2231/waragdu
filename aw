namespace ConsoleApp1
{
    internal class Program
    {
        static void Main(string[] args)
        {
            //rey michael
            string yesOrno;
            do
            {
                Console.Clear();
                //random recommended items BY DANES MARK
                Random number = new();

                int value = number.Next(1, 4);
                Console.WriteLine("                     -----WELCOME TO SHOP APP-----");
                switch (value)
                {
                    case 1:
                        Console.WriteLine("\n               -----!!!Recommended ITEMS for you!!!-----" +
                        "\n   \n          | Realme Book | HP Spectre x360 14 | Macbook Pro |\n" +
                            "\n     | Asus Zenbook Pro Duo 14 | Dell XPS 13 | Apple Macbook Air |");
                        break;
                    case 2:
                        Console.WriteLine("\n               -----!!!Recommended ITEMS for you!!!-----" +

                        "\n  \n              | Mouse | Monitor '27inch' |  RAM  '8gb'  |\n" +
                            "\n        | Mechanical Keyboard | Computer desk | Office Chair |");
                        break;
                    case 3:
                        Console.WriteLine("\n               -----!!!Recommended ITEMS for you!!!-----" +
                        "\n  \n  | Asus ROG Zephyrus G15  |  Asus ChromeBook Flip CX5  | RAM '8gb' |\n" +
                            "\n              | Redmi Book 15 | Mouse Pad | Office Chair |");
                        break;
                }

                // Items BY DANES MARK

                Console.Write("\n----------------------------------------------------------------------");
                Console.Write("\n \n   Search Product you want:");
                string items = Console.ReadLine().ToLower();

                Console.Clear();

                double payMent = 0;
                string voucher = "";
                double price = 0;
                switch (items)
                {

                    case "computer desk":
                        Console.WriteLine("" +
                          "            SPEND A MINIMUM OF P10,000 TO GET A BIG DISCOUNT!" +
                         "\n                            <COMPUTER DESK FOUND>                     " +
                         "\n     ______________________________________________________________" +
                         "\n    |                       Sizes available                        |" +
                         "\n    |   Computer desk (80cm ) P1400 | Computer desK (100cm) P1700  |" +
                         "\n    |                               |                              |" +
                         "\n    |   Computer desK (120cm) P2000 | Computer desk (140cm) P2500  |" +
                         "\n    |                               |                              |" +
                         "\n    |______________________________________________________________|");


                        //variant of the item will be executed right here
                        Console.Write("\n    Enter the desired desk size:");
                        string itemVariant = Console.ReadLine().ToLower();
                        //
                        if (itemVariant == "120cm")
                        {
                            int shippingFee = 500;
                            Console.WriteLine("\n    Shipping Fee: " + shippingFee);
                            price = 2000 + shippingFee;
                            Console.Write("\n    Price of your ITEM w/ shipping fee is:" + price);


                            Console.Write("\n \n    Enter QUANTITY:");
                            int num = Convert.ToInt32(Console.ReadLine());
                            if (num < 10)
                            {
                                payMent = price * num;

                                Console.WriteLine("\n    Total Price is: " + payMent);

                                Console.Write("\n----------------------------------------------------------------------");

                                if (payMent < 10000)
                                {
                                    Console.Write("\n    Enter the voucher you want to use ; voucher1 | voucher2 | voucher3\n    ");
                                    Console.Write("Type Here:");
                                    voucher = Console.ReadLine().ToLower();
                                }

                            }
                            else
                            {
                                Console.Clear();
                                Console.Write("\n----------------------------------------------------------------------\n");
                                Console.WriteLine("\n              !!! You've exceeded the quantity limit !!!");
                                Console.Write("\n----------------------------------------------------------------------");
                            }

                        }
                        else if (itemVariant == "100cm")
                        {
                            int shippingFee = 400;
                            Console.WriteLine("\n    Shipping Fee: " + shippingFee);
                            price = 1700 + shippingFee;
                            Console.Write("\n    Price of your ITEM w/ shipping fee is:" + price);

                            Console.Write("\n \n    Enter QUANTITY:");
                            int num = Convert.ToInt32(Console.ReadLine());
                            if (num < 10)
                            {
                                payMent = price * num;

                                Console.WriteLine("\n    Total Price is: " + payMent);

                                Console.Write("\n----------------------------------------------------------------------");

                                if (payMent < 10000)
                                {
                                    Console.Write("\n    Enter the voucher you want to use ; voucher1 | voucher2 | voucher3\n    ");
                                    Console.Write("Type Here:");
                                    voucher = Console.ReadLine().ToLower();
                                }
                            }
                            else
                            {
                                Console.Clear();
                                Console.Write("\n----------------------------------------------------------------------\n");
                                Console.WriteLine("\n              !!! You've exceeded the quantity limit !!!");
                                Console.Write("\n----------------------------------------------------------------------");
                            }
                        }
                        else if (itemVariant == "80cm")
                        {
                            int shippingFee = 300;
                            Console.WriteLine("\n    Shipping Fee: " + shippingFee);
                            price = 1400 + shippingFee;
                            Console.Write("\n    Price of your ITEM w/ shipping fee is:" + price);

                            Console.Write("\n \n    Enter QUANTITY:");
                            int num = Convert.ToInt32(Console.ReadLine());
                            if (num < 10)
                            {
                                payMent = price * num;

                                Console.WriteLine("\n    Total Price is: " + payMent);

                                Console.Write("\n----------------------------------------------------------------------");

                                if (payMent < 10000)
                                {
                                    Console.Write("\n    Enter the voucher you want to use ; voucher1 | voucher2 | voucher3\n    ");
                                    Console.Write("Type Here:");
                                    voucher = Console.ReadLine().ToLower();
                                }
                            }
                            else
                            {
                                Console.Clear();
                                Console.Write("\n----------------------------------------------------------------------\n");
                                Console.WriteLine("\n              !!! You've exceeded the quantity limit !!!");
                                Console.Write("\n----------------------------------------------------------------------");
                            }
                        }
                        else if (itemVariant == "140cm")
                        {
                            int shippingFee = 300;
                            Console.WriteLine("\n    Shipping Fee: " + shippingFee);
                            price = 2500 + shippingFee;
                            Console.WriteLine("Total Price of your parcel " + price);

                            Console.Write("\n \n    Enter QUANTITY:");
                            int num = Convert.ToInt32(Console.ReadLine());
                            if (num < 10)
                            {
                                payMent = price * num;

                                Console.WriteLine("\n    Total Price is: " + payMent);

                                Console.Write("\n----------------------------------------------------------------------");

                                if (payMent < 10000)
                                {
                                    Console.Write("\n    Enter the voucher you want to use ; voucher1 | voucher2 | voucher3\n    ");

                                    voucher = Console.ReadLine().ToLower();
                                }
                            }
                            else
                            {
                                Console.Clear();
                                Console.Write("\n----------------------------------------------------------------------\n");
                                Console.WriteLine("\n              !!! You've exceeded the quantity limit !!!");
                                Console.Write("\n----------------------------------------------------------------------");
                            }
                        }
                        else// if items are not available
                        {
                            Console.Clear();
                            Console.WriteLine("" +
                           "\n     ______________________________________________________________ " +
                           "\n    |                                                              |" +
                           "\n    |                                                              |" +
                           "\n    |                                                              |" +
                           "\n    |                     VARIANT NOT AVAILABLE                    |" +
                           "\n    |                                                              |" +
                           "\n    |                                                              |" +
                           "\n    |                                                              |" +
                           "\n    |______________________________________________________________|");
                        }
                        break;


                    //danes mark
                    //ANOTHER ITEMMMMMMMMMMM    
                    case "laptop":

                        Console.WriteLine("" +
                            "            SPEND A MINIMUM OF P30,000 TO GET A BIG DISCOUNT!" +
                           "\n                            <LAPTOP   FOUND>                     " +
                           "\n     ______________________________________________________________ " +
                           "\n    |                       Laptops available                      |" +
                           "\n    |     Apple MacBook Air (M2) -  |    Asus ROG Zephyrus G15 -   |" +
                           "\n    |           P69,990             |           P123,000           |" +
                           "\n    |                               |                              |" +
                           "\n    |    MacBook Pro (16 inch) -    | Realme Book (intel i5)  -    |" +
                           "\n    |          P146,990             |          P35,990             |" +
                           "\n    |                               |                              |" +
                           "\n    |     MacBook Air(M1) -         |         Dell XPS 13  -       |" +
                           "\n    |           P57,990             |           P48,950.00         |" +
                           "\n    |                               |                              |" +
                           "\n    |      HP Spectre x360 14 -     |   Asus ChromeBook Flip CX5 - |" +
                           "\n    |           P79,190             |           P57,528            |" +
                           "\n    |                               |                              |" +
                           "\n    |   Asus ZenBook Pro Duo 14 -   |  Redmi Book 15 (intel i5) -  |" +
                           "\n    |           P84,995             |           P37,999            |" +
                           "\n    |______________________________________________________________|");


                        Console.Write("\n    Enter laptops brand:");
                        string itemVariant1 = Console.ReadLine().ToLower();
                        if (itemVariant1 == "hp spectre")
                        {
                            int shippingFee = 3400;
                            Console.WriteLine("\n    Shipping Fee: " + shippingFee);
                            price = 79190 + shippingFee;
                            Console.Write("\n    Price of your ITEM w/ shipping fee is:" + price);


                            Console.Write("\n \n    Enter QUANTITY:");
                            int num = Convert.ToInt32(Console.ReadLine());
                            if (num < 3)
                            {
                                payMent = price * num;

                                Console.WriteLine("\n    Total Price is: " + payMent);

                                Console.Write("\n----------------------------------------------------------------------");

                                if (payMent < 10000)
                                {
                                    Console.Write("\n    Enter the voucher you want to use ; voucher1 | voucher2 | voucher3\n    ");

                                    voucher = Console.ReadLine().ToLower();
                                }
                            }
                            else
                            {
                                Console.Clear();
                                Console.Write("\n----------------------------------------------------------------------\n");
                                Console.WriteLine("\n              !!! You've exceeded the quantity limit !!!");
                                Console.Write("\n----------------------------------------------------------------------");
                            }

                        }
                        else if (itemVariant1 == "macbook air m1")
                        {
                            int shippingFee = 400;
                            Console.WriteLine("\n    Shipping Fee: " + shippingFee);
                            price = 57990 + shippingFee;
                            Console.Write("\n    Price of your ITEM w/ shipping fee is:" + price);


                            Console.Write("\n \n    Enter QUANTITY:");
                            int num = Convert.ToInt32(Console.ReadLine());
                            if (num < 3)
                            {
                                payMent = price * num;

                                Console.WriteLine("\n    Total Price is: " + payMent);

                                Console.Write("\n----------------------------------------------------------------------");

                                if (payMent < 10000)
                                {
                                    Console.Write("\n    Enter the voucher you want to use ; voucher1 | voucher2 | voucher3\n    ");

                                    voucher = Console.ReadLine().ToLower();
                                }
                            }
                            else
                            {
                                Console.Clear();
                                Console.Write("\n----------------------------------------------------------------------\n");
                                Console.WriteLine("\n              !!! You've exceeded the quantity limit !!!");
                                Console.Write("\n----------------------------------------------------------------------");
                            }
                        }
                        else if (itemVariant1 == "macbook pro")
                        {
                            int shippingFee = 5000;
                            Console.WriteLine("\n    Shipping Fee: " + shippingFee);
                            price = 146990 + shippingFee;
                            Console.Write("\n    Price of your ITEM w/ shipping fee is:" + price);


                            Console.Write("\n \n    Enter QUANTITY:");
                            int num = Convert.ToInt32(Console.ReadLine());
                            if (num < 3)
                            {
                                payMent = price * num;

                                Console.WriteLine("\n    Total Price is: " + payMent);

                                Console.Write("\n----------------------------------------------------------------------");

                                if (payMent < 10000)
                                {
                                    Console.Write("\n    Enter the voucher you want to use ; voucher1 | voucher2 | voucher3\n    ");

                                    voucher = Console.ReadLine().ToLower();
                                }
                            }
                            else
                            {
                                Console.Clear();
                                Console.Write("\n----------------------------------------------------------------------\n");
                                Console.WriteLine("\n              !!! You've exceeded the quantity limit !!!");
                                Console.Write("\n----------------------------------------------------------------------");
                            }
                        }
                        else if (itemVariant1 == "macbook air m2")
                        {
                            int shippingFee = 4500;
                            Console.WriteLine("\n    Shipping Fee: " + shippingFee);
                            price = 69990 + shippingFee;
                            Console.Write("\n    Price of your ITEM w/ shipping fee is:" + price);


                            Console.Write("\n \n    Enter QUANTITY:");
                            int num = Convert.ToInt32(Console.ReadLine());
                            if (num < 3)
                            {
                                payMent = price * num;

                                Console.WriteLine("\n    Total Price is: " + payMent);

                                Console.Write("\n----------------------------------------------------------------------");

                                if (payMent < 10000)
                                {
                                    Console.Write("\n    Enter the voucher you want to use ; voucher1 | voucher2 | voucher3\n    ");

                                    voucher = Console.ReadLine().ToLower();
                                }
                            }

                            else
                            {
                                Console.Clear();
                                Console.Write("\n----------------------------------------------------------------------\n");
                                Console.WriteLine("\n              !!! You've exceeded the quantity limit !!!");
                                Console.Write("\n----------------------------------------------------------------------");
                            }
                        }
                        else if (itemVariant1 == "asus zenbook pro duo")
                        {
                            int shippingFee = 3500;
                            Console.WriteLine("\n    Shipping Fee: " + shippingFee);
                            price = 84995 + shippingFee;
                            Console.Write("\n    Price of your ITEM w/ shipping fee is:" + price);


                            Console.Write("\n \n    Enter QUANTITY:");
                            int num = Convert.ToInt32(Console.ReadLine());
                            if (num < 3)
                            {
                                payMent = price * num;

                                Console.WriteLine("\n    Total Price is: " + payMent);

                                Console.Write("\n----------------------------------------------------------------------");

                                if (payMent < 10000)
                                {
                                    Console.Write("\n    Enter the voucher you want to use ; voucher1 | voucher2 | voucher3\n    ");

                                    voucher = Console.ReadLine().ToLower();
                                }
                            }

                            else
                            {
                                Console.Clear();
                                Console.Write("\n----------------------------------------------------------------------\n");
                                Console.WriteLine("\n              !!! You've exceeded the quantity limit !!!");
                                Console.Write("\n----------------------------------------------------------------------");
                            }

                        }
                        else if (itemVariant1 == "asus rog zephyrus")
                        {
                            int shippingFee = 3300;
                            Console.WriteLine("\n    Shipping Fee: " + shippingFee);
                            price = 123000 + shippingFee;
                            Console.Write("\n    Price of your ITEM w/ shipping fee is:" + price);


                            Console.Write("\n \n    Enter QUANTITY:");
                            int num = Convert.ToInt32(Console.ReadLine());
                            if (num < 3)
                            {
                                payMent = price * num;

                                Console.WriteLine("\n    Total Price is: " + payMent);

                                Console.Write("\n----------------------------------------------------------------------");

                                if (payMent < 10000)
                                {
                                    Console.Write("\n    Enter the voucher you want to use ; voucher1 | voucher2 | voucher3\n    ");

                                    voucher = Console.ReadLine().ToLower();
                                }
                            }

                            else
                            {
                                Console.Clear();
                                Console.Write("\n----------------------------------------------------------------------\n");
                                Console.WriteLine("\n              !!! You've exceeded the quantity limit !!!");
                                Console.Write("\n----------------------------------------------------------------------");
                            }
                        }
                        else if (itemVariant1 == "realme book")
                        {
                            int shippingFee = 3100;
                            Console.WriteLine("\n    Shipping Fee: " + shippingFee);
                            price = 35990 + shippingFee;
                            Console.Write("\n    Price of your ITEM w/ shipping fee is:" + price);


                            Console.Write("\n \n    Enter QUANTITY:");
                            int num = Convert.ToInt32(Console.ReadLine());
                            if (num < 3)
                            {
                                payMent = price * num;

                                Console.WriteLine("\n    Total Price is: " + payMent);

                                Console.Write("\n----------------------------------------------------------------------");

                                if (payMent < 10000)
                                {
                                    Console.Write("\n    Enter the voucher you want to use ; voucher1 | voucher2 | voucher3\n    ");

                                    voucher = Console.ReadLine().ToLower();
                                }
                            }

                            else
                            {
                                Console.Clear();
                                Console.Write("\n----------------------------------------------------------------------\n");
                                Console.WriteLine("\n              !!! You've exceeded the quantity limit !!!");
                                Console.Write("\n----------------------------------------------------------------------");
                            }
                        }
                        else if (itemVariant1 == "dell xps")
                        {
                            int shippingFee = 3200;
                            Console.WriteLine("\n    Shipping Fee: " + shippingFee);
                            price = 48950 + shippingFee;
                            Console.Write("\n    Price of your ITEM w/ shipping fee is:" + price);


                            Console.Write("\n \n    Enter QUANTITY:");
                            int num = Convert.ToInt32(Console.ReadLine());
                            if (num < 3)
                            {
                                payMent = price * num;

                                Console.WriteLine("\n    Total Price is: " + payMent);

                                Console.Write("\n----------------------------------------------------------------------");

                                if (payMent < 10000)
                                {
                                    Console.Write("\n    Enter the voucher you want to use ; voucher1 | voucher2 | voucher3\n    ");

                                    voucher = Console.ReadLine().ToLower();
                                }
                            }

                            else
                            {
                                Console.Clear();
                                Console.Write("\n----------------------------------------------------------------------\n");
                                Console.WriteLine("\n              !!! You've exceeded the quantity limit !!!");
                                Console.Write("\n----------------------------------------------------------------------");
                            }
                        }
                        else if (itemVariant1 == "asus chromebook flip")
                        {
                            int shippingFee = 3000;
                            Console.WriteLine("\n    Shipping Fee: " + shippingFee);
                            price = 57528 + shippingFee;
                            Console.Write("\n    Price of your ITEM w/ shipping fee is:" + price);


                            Console.Write("\n \n    Enter QUANTITY:");
                            int num = Convert.ToInt32(Console.ReadLine());
                            if (num < 3)
                            {
                                payMent = price * num;

                                Console.WriteLine("\n    Total Price is: " + payMent);

                                Console.Write("\n----------------------------------------------------------------------");

                                if (payMent < 10000)
                                {
                                    Console.Write("\n    Enter the voucher you want to use ; voucher1 | voucher2 | voucher3\n    ");

                                    voucher = Console.ReadLine().ToLower();
                                }
                            }
                            else
                            {
                                Console.Clear();
                                Console.Write("\n----------------------------------------------------------------------\n");
                                Console.WriteLine("\n              !!! You've exceeded the quantity limit !!!");
                                Console.Write("\n----------------------------------------------------------------------");
                            }
                        }
                        else if (itemVariant1 == "redmi book")
                        {
                            int shippingFee = 4400;
                            Console.WriteLine("\n    Shipping Fee: " + shippingFee);
                            price = 37999 + shippingFee;
                            Console.Write("\n    Price of your ITEM w/ shipping fee is:" + price);


                            Console.Write("\n \n    Enter QUANTITY:");
                            int num = Convert.ToInt32(Console.ReadLine());
                            if (num < 3)
                            {
                                payMent = price * num;

                                Console.WriteLine("\n    Total Price is: " + payMent);

                                Console.Write("\n----------------------------------------------------------------------");

                                if (payMent < 10000)
                                {
                                    Console.Write("\n    Enter the voucher you want to use ; voucher1 | voucher2 | voucher3\n    ");

                                    voucher = Console.ReadLine().ToLower();
                                }
                            }
                            else
                            {
                                Console.Clear();
                                Console.Write("\n----------------------------------------------------------------------\n");
                                Console.WriteLine("\n              !!! You've exceeded the quantity limit !!!");
                                Console.Write("\n----------------------------------------------------------------------");
                            }
                        }


                        break;

                    default:
                        Console.WriteLine("" +
                           "     ______________________________________________________________ " +
                           "\n    |                                                              |" +
                           "\n    |                                                              |" +
                           "\n    |                                                              |" +
                           "\n    |                     ITEM NOT AVAILABLE                       |" +
                           "\n    |                                                              |" +
                           "\n    |                                                              |" +
                           "\n    |                                                              |" +
                           "\n    |______________________________________________________________|");
                        Console.Write("\n--------------------------------------------------------");

                        break;
                }





                //VOUCHER SYSTEMMMMMMMMMMMMMMMM BY REY MICHAEL

                if (voucher == "voucher1")
                {
                    Console.Clear();
                    int voucher1 = 100;

                    double overall = payMent - voucher1;
                    Console.WriteLine("" +
                             "                                                                     " +
                            "\n                                                                    " +
                            "\n     ______________________________________________________________ " +
                            "\n    |                                                              |" +
                            "\n    |            !!!THANK YOU FOR USING SHOP APP!!!                |" +
                            "\n    |                                                              |" +
                            "\n    |  ESTIMATED TIME OF DELIVERY - 7 DAYS                         |" +
                            "\n    |                                                              |" +
                            "\n    |                                                              |" +
                            "\n    |                  ORDER TOTAL: " + overall + "                |" +
                            "\n    |                                                              |" +
                            "\n    |                                                              |" +
                            "\n    |  PAYMENT OPTION : CASH ON DELIVERY                           |" +
                            "\n    |                                                              |" +
                            "\n    |      PLATFORM VOUCHER :            [VOUCHER1]                |" +
                            "\n    |                                                              |" +
                            "\n    |                              PAYMENT TOTAL:" + overall + "   |" +
                            "\n    |                                                              |" +
                            "\n    |______________________________________________________________|");
                }
                else if (voucher == "voucher2")
                {
                    Console.Clear();
                    int voucher2 = 200;

                    double overall = payMent - voucher2;
                    Console.WriteLine("" +
                            "                                                                     " +
                           "\n                                                                    " +
                           "\n     ______________________________________________________________ " +
                           "\n    |                                                              |" +
                           "\n    |            !!!THANK YOU FOR USING SHOP APP!!!                |" +
                           "\n    |                                                              |" +
                           "\n    |  ESTIMATED TIME OF DELIVERY - 7 DAYS                         |" +
                           "\n    |                                                              |" +
                           "\n    |                                                              |" +
                           "\n    |                  ORDER TOTAL: " + overall + "                |" +
                           "\n    |                                                              |" +
                           "\n    |                                                              |" +
                           "\n    |  PAYMENT OPTION : CASH ON DELIVERY                           |" +
                           "\n    |                                                              |" +
                           "\n    |      PLATFORM VOUCHER :            [VOUCHER2]                |" +
                           "\n    |                                                              | " +
                           "\n    |                              PAYMENT TOTAL:" + overall + "   |" +
                           "\n    |                                                              |" +
                           "\n    |______________________________________________________________|");
                }
                else if (voucher == "voucher3")
                {
                    Console.Clear();
                    int voucher2 = 300;

                    double overall = payMent - voucher2;
                    Console.WriteLine("" +
                            "                                                                     " +
                           "\n                                                                    " +
                           "\n     ______________________________________________________________ " +
                           "\n    |                                                              |" +
                           "\n    |            !!!THANK YOU FOR USING SHOP APP!!!                |" +
                           "\n    |                                                              |" +
                           "\n    |  ESTIMATED TIME OF DELIVERY - 7 DAYS                         |" +
                           "\n    |                                                              |" +
                           "\n    |                                                              |" +
                           "\n    |                  ORDER TOTAL: " + overall + "                |" +
                           "\n    |                                                              |" +
                           "\n    |                                                              |" +
                           "\n    |  PAYMENT OPTION : CASH ON DELIVERY                           |" +
                           "\n    |                                                              |" +
                           "\n    |      PLATFORM VOUCHER :            [VOUCHER3]                |" +
                           "\n    |                                                              | " +
                           "\n    |                              PAYMENT TOTAL:" + overall + "   |" +
                           "\n    |                                                              |" +
                           "\n    |______________________________________________________________|");
                }

                //rey michael
                //Super discoounttttt
                if (payMent >= 10000)
                {

                    Console.WriteLine("\n                  !!!CONGRATULATIONS!!!");
                    Console.WriteLine("\n    YOU SPEND 10K+ WORTH OF ITEMS ANG GOT A THE BIG DISCOUNT!");
                    Console.WriteLine("\n    Type 'SUPER VOUCHER' to activate your big discount!");
                    Console.Write("\n    Type here:");
                    string superVoucher = Console.ReadLine().ToLower();

                    if (superVoucher == "super voucher")
                    {
                        int superVoucher1 = 3000;

                        double discountPrice = payMent - superVoucher1;
                        Console.Clear();
                        Console.WriteLine("" +
                            "                                                                     " +
                           "\n                                                                    " +
                           "\n     ______________________________________________________________ " +
                           "\n    |                                                              |" +
                           "\n    |            !!!THANK YOU FOR USING SHOP APP!!!                |" +
                           "\n    |                                                              |" +
                           "\n    |  ESTIMATED TIME OF DELIVERY - 7 DAYS                         |" +
                           "\n    |                                                              |" +
                           "\n    |                                                              |" +
                           "\n    |                  ORDER TOTAL: " + discountPrice + "          |" +
                           "\n    |                                                              |" +
                           "\n    |                                                              |" +
                           "\n    |  PAYMENT OPTION : CASH ON DELIVERY                           |" +
                           "\n    |                                                              |" +
                           "\n    |      PLATFORM VOUCHER :      [SUPER VOUCHER]                 |" +
                           "\n    |                                                              | " +
                           "\n    |                         PAYMENT TOTAL:" + discountPrice + "  |" +
                           "\n    |                                                              |" +
                           "\n    |______________________________________________________________|");
                    }

                }

                Console.Write("\n----------------------------------------------------------------------");
                Console.WriteLine("\n \n            -----WOULD YOU LIKE TO BUY ANOTHER ITEM?-----");
                Console.WriteLine("               Type 'YES' to proceed to the home page");
                Console.WriteLine("              Typing 'NO' will automatically exit the app.");
                Console.Write("\n----------------------------------------------------------------------\n");
                Console.Write("    Type your answer:");
                yesOrno = Console.ReadLine().ToLower();

                while ((yesOrno != "yes") && (yesOrno != "no"))
                {
                    Console.Write("\n    Yes or No? :");
                    yesOrno = Console.ReadLine().ToLower();
                }
            } while (yesOrno == "yes");

            Console.WriteLine("" +
                           "       ______________________________________________________________ " +
                           "\n    |                                                              |" +
                           "\n    |                                                              |" +
                           "\n    |                                                              |" +
                           "\n    |                  THANK YOU FOR USING OUR APP                 |" +
                           "\n    |                             O_O                              |" +
                           "\n    |                                                              |" +
                           "\n    |                                                              |" +
                           "\n    |______________________________________________________________|");
            Console.ReadKey();
        }
    }
}
