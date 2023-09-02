#include <iostream>
#include <chrono>
#include <fstream>
#include <cstring>
using namespace std;

void set_unsigned_long_long_variable(string name, unsigned long long var)
{
    ofstream outfile(name + ".bin"  , ofstream::binary);
    if (outfile)
    {
        outfile.write(reinterpret_cast<const char*>(&var), sizeof(var));
        outfile.close();
    }
    else cerr << "Error opening file: " << name + ".bin" << endl;
}

unsigned long long get_unsigned_long_long_variable(string name)
{
    unsigned long long var = 0;
    ifstream infile(name + ".bin", ifstream::binary);
    if (infile)
    {
        infile.read(reinterpret_cast<char*>(&var), sizeof(var));
        infile.close();
    }
    else cerr << "Error opening file: " << name + ".bin" << endl;
    
    return var;
}

int main(int argc, char** argv)  {

    // Start execution time
    auto start = chrono::high_resolution_clock::now();

    // Code ----------------------------------------------------------

    if( strcmp(argv[1], "RAM") == 0 )
    {
        unsigned long long n = stoull(argv[2]), counter = n, sum_divable = 0;
        while (counter > 0) {
            if( n % counter == 0 )
                ++sum_divable;
            --counter;
        }
        cout << sum_divable << endl;
    }
    else if( strcmp(argv[1], "HDD") == 0 )
    {
        set_unsigned_long_long_variable( "n", stoull(argv[2]) );
        set_unsigned_long_long_variable( "counter", get_unsigned_long_long_variable("n"));
        set_unsigned_long_long_variable( "sum_divable", 0);
        while (get_unsigned_long_long_variable("counter") > 0) {
            if( get_unsigned_long_long_variable("n") % get_unsigned_long_long_variable("counter") == 0 )
                set_unsigned_long_long_variable( "sum_divable", get_unsigned_long_long_variable("sum_divable") + 1);
            set_unsigned_long_long_variable( "counter", get_unsigned_long_long_variable("counter") - 1);
        }
        cout << get_unsigned_long_long_variable("sum_divable") << endl;
    }
    else cout << "ERROR: Wronge input argument." << endl;

    // ---------------------------------------------------------------

    // Stop measuring execution time
    auto end = chrono::high_resolution_clock::now();
    chrono::duration<double, milli> execution_time = end - start;

    // Printing result
    cout << "Execution Time (Based on chrono): " << execution_time.count() << " ms" << endl;

    return 0;
}
