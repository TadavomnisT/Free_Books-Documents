#include <iostream>
#include <sys/resource.h>
#include <chrono>
#include <fstream>
#include <string>
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

int main() {

    // Start execution time
    clock_t start_1 = clock();
    auto start_2 = chrono::high_resolution_clock::now();

    // Start memory usage
    struct rusage usage;
    getrusage(RUSAGE_SELF, &usage);
    long memory_usage_start = usage.ru_maxrss; // in kilobytes
    
    // Code ----------------------------------------------------------

    set_unsigned_long_long_variable( "n", 94 );
    set_unsigned_long_long_variable( "t1", 0 );
    set_unsigned_long_long_variable( "t2", 1 );
    set_unsigned_long_long_variable( "t3", 0 );

    if(get_unsigned_long_long_variable("n") == 1)
        cout << get_unsigned_long_long_variable("t1") << endl;
    else if(get_unsigned_long_long_variable("n") == 2)
        cout << get_unsigned_long_long_variable("t2") << endl;
    else{
        set_unsigned_long_long_variable( "counter", 3 );
        while (get_unsigned_long_long_variable("counter") <= get_unsigned_long_long_variable("n")) {
            set_unsigned_long_long_variable ( "t3", get_unsigned_long_long_variable("t1") + get_unsigned_long_long_variable("t2"));
            set_unsigned_long_long_variable ("t1" , get_unsigned_long_long_variable("t2"));
            set_unsigned_long_long_variable ("t2" , get_unsigned_long_long_variable("t3"));
            set_unsigned_long_long_variable ("counter" , get_unsigned_long_long_variable("counter") + 1);
        }
        cout << get_unsigned_long_long_variable("t3") << endl;
    }
    
    // ---------------------------------------------------------------
    
    // Stop measuring memory usage
    getrusage(RUSAGE_SELF, &usage);
    long memory_usage_end = usage.ru_maxrss; // in kilobytes

    // Stop measuring execution time
    clock_t end_1 = clock();
    auto end_2 = chrono::high_resolution_clock::now();
    double execution_time_1 = double(end_1 - start_1) / CLOCKS_PER_SEC;
    chrono::duration<double, milli> execution_time_2 = end_2 - start_2;

    // Printing result
    cout << "Execution Time (Based on ctime): " << execution_time_1 * 1000.0 << " ms" << endl;
    cout << "Execution Time (Based on chrono): " << execution_time_2.count() << " ms" << endl;
    cout << "Memory Usage: " << memory_usage_end - memory_usage_start << " KB" << endl;

    return 0;
}
